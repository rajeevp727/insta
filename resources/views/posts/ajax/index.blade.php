@foreach ($posts as $post)
<div>
    <a href="/p/{{$post->id}}">
        <img src="/storage/{{ $post->image }}" class="w-100">
    </a>
</div>
<div class="row">
    <div class="" style="border: 1px solid lightgray; width: 100%; ">
        <div>
            <p>
                <span class="pt-1 font-weight-bold">
                    <a href="/profile/{{$post->user->id}}" style="color: black;">{{$post->user->username}}
                    </a>
                </span>{{ $post->caption }}
            </p>
        </div>
        <div>
            <label for="">Like</label>
            <label for="">Comment</label>
            <label for="">Share</label>
            <label for="" style="float: right;">Save</label>
        </div>
    </div> <br>
    @endforeach
