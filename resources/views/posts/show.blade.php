@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5 pt-4">
        <div class="col-7">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4" style="border: 1px solid rgb(226, 222, 222);">
            <div>
                <div class="d-flex pt-3">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle"
                            style="height: 30px;">
                    </div>
                    <div>
                        <div class="pt-1 font-weight-bold">
                            <a href="/profile/{{$post->user->id}}" style="color: black;"
                                class="text-decoration-none">{{$post->user->username}}</a>
                            <span style="font-size: 13px;"><span class="pl-2">•</span>
                                <a href="" class="pl-2 text-decoration-none">Follow</a></span>
                            <span style="float: right; margin-left: 130px;">
                                <a id="navbarDropdown" class="text-dark text-decoration-none" role="button"
                                    data-toggle="dropdown" aria-expanded="false" v-pre>
                                    ••• </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                    style="margin-right: 120px;">
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/delete/{{ $post->id }}" class="ml-5"
                                            style="color: red; text-decoration: none;">
                                            Delete</a> <br>
                                        <a href="/edit/{{ $post->id }}" class="ml-5"
                                            style="color:green; text-decoration: none;">Edit</a> <br>
                                        <a href="/cancel" class="text-dark ml-5 text-decoration-none">Cancel</a>
                                    </form>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <hr>
                <p>

                    <a href="/profile/{{$post->user->id}}" style="color: black;"
                        class="text-decoration-none">{{$post->user->username}}
                    </a>
                    </span>{{ $post->caption }}
                </p>
            </div>
            <div class="pt-5">
                <hr>


                <section>
                    {{-- Like --}}
                    <button style="background-color:  white; border: none;">
                        <img src="/SVG/notifications.svg" height="32" class="pr-1 pt-1">
                    </button>

                    {{-- Comment --}}
                    <button style="background-color:  white; border: none;">
                        <img src="/SVG/comment.svg" height="30" class="pr-1 pt-1">
                    </button>

                    {{-- Share --}}
                    <button style="background-color:  white; border: none;">
                        <img src="/SVG/share.svg" height="30" class="pr-1 pt-1">
                    </button>

                    {{-- Save --}}
                    <button style="background-color:  white; border: none;  float: right;">
                        <img src="/SVG/save.svg" height="30" class="pr-1 pt-1">
                    </button>
                </section>
                <br>
                <div class="d-flex">
                    <svg aria-label="Emoji" fill="#262626" height="30" viewBox="0 0 48 48" width="24">
                        <path
                            d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z">
                        </path>
                        <path
                            d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z">
                        </path>
                    </svg>
                    <input type="text" name="add_comment" placeholder="Add a Comment..."
                        style="width: 100%; border: none;">
                    <input type="submit" value="Post"
                        style="padding-left: -100px; border: none; background-color: white;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
