@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row profile-top">
            <div class="col-3 p-5">
                <img src="/storage/{{ $user->profile->profile_pic }}" alt="DP" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5 pl-5">
                <div class="d-flex justify-content-between align-items-center pl-3 pb-3 username">
                    <div class="d-flex align-items-center">
                        {{ $user->username }}
                        @can ('update', $user->profile)
                        @else
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        @endcan
                    </div>
                    @can ('update', $user->profile)
                        <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-secondary" role="button">Edit Profile</a>
                        <a href="{{ route('posts.create') }}"><img src="/svg/addposticon.png" alt="Add New Post" style="max-height: 40px;"></a>
                    @endcan
                </div>
                <div class="d-flex pl-3">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
                </div>
                <div class="pt-4 pl-3" style="font-size: 16px;"><strong>{{ $user->profile->title }}</strong></div>
                <div class="pl-3" style="font-size: 16px;">
                    {{ $user->profile->bio }}
                </div>
                <div class="pl-3" style="font-size: 16px;">
                    <a href="{{ $user->profile->website }}">
                        <strong>{{ $user->profile->website }}</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-5 pl-5 pr-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img alt="{{ $post->caption }}"
                        decoding="auto"
                        width="293"
                        height="293"
                        src="/storage/{{ $post->image }}"
                        style="object-fit: cover;">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
