@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" style="height: 200px; width:200px;" class=" rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center pb-3">
                        <h1>{{$user->username}}</h1>
                        {{-- <button class="btn btn-primary ml-4">Follow</button> --}}
                        <div>
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        </div>
                    </div>
                    @can('update', $user->profile)
                    <a href="/p/create" class="pt-2">Add new Post</a>
                    @endcan
                </div>
                @can ('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                    <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
                <div style="width: 550px;">{{$user->profile->description }}
                </div>
                <div class="font-weight-bold">
                    <a href="#" style="color:black;">{{ $user->profile->url ?? 'N\A' }}</a>
                    {{-- NOTE:: The ?? in the above line is OR in laravel --}}
                </div>
            </div>
        </div>
    </div>
    <div style="padding-left: 450px;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <div class="d-flex">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="/SVG/posts.svg" height="20" width="20">
                        Posts
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="d-flex">
                    <a class="nav-link" href="#">
                        <img src="/SVG/Tagged.svg" height="20" width="20">
                        Tagged
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
