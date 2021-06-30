@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-7" style="margin-left: 10%; margin-top: 70px;">
        <div class="pl-2" style="border: 1px solid lightgray; left: 65%; width: 20%; position: fixed;">
            <div class="d-flex mt-2">
                <div class="pt-2">
                    <a href="/profile/{{Auth::user()->id}}">
                        <img src="{{auth()->user()->profile->profileImage()}}" class="rounded-circle" height="50px">
                    </a>
                </div>
                <div class="mt-2">
                    <a href="/profile/{{Auth::user()->id}}" class="pl-2" style="text-decoration: none; color: black;">
                        <span class="h3">
                            {{auth()->user()->username}}
                        </span>
                        <br>
                        <span class="h6 pl-2">
                            {{auth()->user()->name}}
                        </span>
                    </a>
                </div>
            </div>
            <div>
                <div>
                    <h6 style="color: gray; padding-top: 20px;">Suggestions For You
                        <a href="" style="float:right; color: black;">See all</a></h6>
                </div>
                {{-- <div> --}}
                {{-- @foreach ($usersList as $users) --}}
                {{-- <h3>{{$users['name']}}</h3> --}}
                {{-- @endforeach --}}
                {{-- </div> --}}
            </div>
        </div>

        <div class="row">
            {{-- @foreach ($posts as $post) --}}
            {{-- <div style=""> --}}
            {{-- <a href="/p/{{$post->id}}"> --}}
            {{-- <img src="/storage/{{ $post->image }}" class="w-100"> --}}
            {{-- </a> --}}
            {{-- </div> --}}
            {{-- <div class=""> --}}
            {{-- <div class="" style="border: 1px solid lightgray; width: 100%; "> --}}
            {{-- <div> --}}
            {{-- <p> --}}
            {{-- <span class="pt-1 font-weight-bold"> --}}
            {{-- <a href="/profile/{{$post->user->id}}" style="color: black;">{{$post->user->username}} --}}
            {{-- </a> --}}
            {{-- </span>{{ $post->caption }} --}}
            {{-- </p> --}}
            {{-- </div> --}}
            {{-- <div> --}}
            {{-- <label for="">Like</label> --}}
            {{-- <label for="">Comment</label> --}}
            {{-- <label for="">Share</label> --}}
            {{-- <label for="" style="float: right;">Save</label> --}}
            {{-- </div> --}}
            {{-- </div> <br> --}}
            {{-- @endforeach --}}
        </div>
    </div>

    {{-- Start - ↓↓↓↓ This is for pagination ↓↓↓↓ --}}

    {{-- <div class="row"> --}}
    {{-- <div class="col-12 d-flex justify-content-center"> --}}
    {{-- {{ $posts->links() }} --}}
    {{-- </div> --}}
    {{-- </div> --}}

    {{-- ↑↑↑↑ This is for pagination ↑↑↑↑- End --}}

</div>
</div>
@endsection
