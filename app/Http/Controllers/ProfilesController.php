<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->profile->id) : false;

        $postsCount = Cache::remember('count.posts.'.$user->id, now()->addSeconds(30), function () use($user) {
            return $user->posts->count();
        });

        $followersCount = Cache::remember('count.followers.'.$user->id, now()->addSeconds(30), function () use($user) {
            return $user->profile->followers->count();
        });

        $followingCount = Cache::remember('count.following.'.$user->id, now()->addSeconds(30), function () use($user) {
            return $user->following->count();
        });

        return view('profiles.index', compact('user', 'follows', 'postsCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'profile_pic' => 'image',
            'title' => 'required',
            'bio' => '',
            'website' => 'url',
        ]);

        if (request('profile_pic')) {
            $imagePath = request('profile_pic')->store('uploads', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            auth()->user()->profile->update(array_merge($data, ['profile_pic' => $imagePath]));
        } else {
            auth()->user()->profile->update($data);
        }

        return redirect(route('profile.show', auth()->user()->id));
    }
}
