@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="dp pt-3">
                        <img src="/storage/{{ $user->profile->profile_pic }}" alt="DP" class="rounded-circle" style="max-height: 100px;">
                    </div>
                    <div class="form-group row pt-3">
                        <label for="profile_pic" class="file-upload__label">Change Profile Picture</label>
                        <input id="profile_pic" class="file-upload__input" type="file" name="profile_pic">
                        @error('profile_pic')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label"><strong>Full Name</strong></label>
                        <input
                        type="text"
                        id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        name="title"
                        value="{{ old('title') ?? $user->profile->title }}"
                        autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="bio" class="col-md-4 col-form-label"><strong>Edit Bio</strong></label>
                        <textarea
                        id="bio"
                        class="form-control @error('bio') is-invalid @enderror"
                        name="bio"
                        rows="3"
                        autocomplete="bio" autofocus>{{ old('bio') ?? $user->profile->bio }}</textarea>

                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-md-4 col-form-label"><strong>Website URL</strong></label>
                        <input
                        type="text"
                        id="website"
                        class="form-control @error('website') is-invalid @enderror"
                        name="website"
                        value="{{ old('website') ?? $user->profile->website }}"
                        autocomplete="website" autofocus>

                        @error('website')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
