@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <div class="row justify-content-center pt-4 pb-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-3"><a href="{{ route('profile.show', $post->user->id) }}"><img src="/storage/{{ $post->user->profile->profile_pic }}" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                            <a href="{{ route('profile.show', $post->user->id) }}" class="special-link"><div class="font-weight-bold text-dark"> {{ $post->user->username }}</div></a>
                        </div>
                    </div>
                    <a href="{{ route('posts.show', $post->id) }}"><img src="/storage/{{ $post->image }}" alt="Post" class="w-100"></a>
                    <div class="card-footer">
                        <div class="d-flex pt-3">
                            <div class="pr-3"><a href="{{ route('profile.show', $post->user->id) }}"><img src="/storage/{{ $post->user->profile->profile_pic }}" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                            <span><a href="{{ route('profile.show', $post->user->id) }}" class="special-link"><span class="font-weight-bold text-dark">{{ $post->user->username }}</span></a> {{ $post->caption }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row pt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
