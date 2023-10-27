<div>
    <div class="post"> 
        <div class="username"><b>{{ $post->user_id }}</b></div>
        <div class="content">{{ $post->content }}</div>
        <div class="post-id"> <a href="/post/show/{{$post->id}}">#{{ $post->id }}</a></div>
    </div> 
    {{-- @auth --}}
        {{-- @if (Auth::user()->id == $post->id) --}}
        @if ($post->user_id == 1)
            <a href="/post/edit/{{$post->id}}"><button style="button">Edit</button></a>
        @endif
    {{-- @endauth --}}
</div>