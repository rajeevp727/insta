@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-5 pt-5">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            {{-- CSRF will allow laravel to limit who can post to the form so as to avoid the duplicate or unwanted data to be passed in. It basically generates a key and in the background compares the key with the suer key as authentication --}}
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Edit Post</h2>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-2 col-form-label">{{ __('Post Caption') }}</label>
                        <div class="col-md-10">
                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                                name="caption" value="{{ old('caption') ?? Auth::user()->posts->caption }}" autofocus>
                            {{-- Work on the Edit Post --}}
                            @error('caption')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="Image" class="col-md-2 col-form-label">{{ __('Post Image') }}</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        @error('Image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-md btn-primary" style="margin-left: 50%;">Update Post</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
</div>
@endsection
