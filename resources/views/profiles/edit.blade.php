@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-5 pt-5">
        <form action="" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            {{-- CSRF will allow laravel to limit who can post to the form so as to avoid the duplicate or unwanted data to be passed in. It basically generates a key and in the background compares the key with the suer key as authentication --}}
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Edit Profile</h2>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">{{ __('Title') }}</label>
                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title') ?? $user->profile->title }}" autofocus>
                            @error('title')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label">{{ __('Description') }}</label>
                        <div class="col-md-10">
                            <input id="description" type="text"
                                class="form-control @error('description') is-invalid @enderror" name="description"
                                value="{{ old('description') ?? $user->profile->description }}" autofocus>
                            @error('description')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-2 col-form-label">{{ __('URL') }}</label>
                        <div class="col-md-10">
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                name="url" value="{{ old('url') ?? $user->profile->url }}" autofocus>
                            @error('url')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="caption" class="col-md-2 col-form-label">{{ __('Profile Image') }}</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" id="image" name="image"> <br>
                            {{-- <img src="/profile/{{ $user->profile->image }}" width="500px" style="margin-left:
                            25%;"> --}}
                        </div>
                        @error('caption')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-md btn-primary" style="margin-left: 50%;">Save Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
