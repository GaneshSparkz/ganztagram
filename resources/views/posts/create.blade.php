@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Create New Post</h1>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="image" class="file-upload__label">Upload Image</label>
                        <input id="image" class="file-upload__input" type="file" name="image">
                        @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label"><strong>Caption</strong></label>
                        <textarea
                        id="caption"
                        class="form-control @error('caption') is-invalid @enderror"
                        name="caption"
                        value="{{ old('caption') }}"
                        autocomplete="caption" autofocus></textarea>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-primary" type="submit">Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
