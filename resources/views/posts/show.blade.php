@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img src="/storage/{{ $post->image }}" alt="Post" class="w-100" style="max-height: 600px; max-width: 600px;">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="pr-3"><a href="{{ route('profile.show', $post->user->id) }}"><img src="/storage/{{ $post->user->profile->profile_pic }}" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                                <a href="{{ route('profile.show', $post->user->id) }}" class="special-link"><div class="font-weight-bold text-dark"> {{ $post->user->username }}</div></a>
                                @if ($post->user->id == auth()->user()->id)
                                @else
                                    <img src="/svg/dot.png" style="max-height: 14px;">
                                    <div><follow-link user-id="{{ $post->user->id }}" follows="{{ $follows }}"></follow-link></div>
                                @endif
                            </div>
                            <hr>
                            <div class="d-flex pt-3">
                                <div class="pr-3"><a href="{{ route('profile.show', $post->user->id) }}"><img src="/storage/{{ $post->user->profile->profile_pic }}" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                                <span><a href="{{ route('profile.show', $post->user->id) }}" class="special-link"><span class="font-weight-bold text-dark">{{ $post->user->username }}</span></a> {{ $post->caption }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
