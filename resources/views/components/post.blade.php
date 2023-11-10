<div>
    <div class="post"> 
        <div class="post-id"> <a href="/post/{{$post->id}}">#{{ $post->id }}</a></div>
        <div class="username"><b>{{ $post->user_name }}</b></div>
        <div class="content">{{ $post->content }}</div>

        @auth
            @if (Auth::id() == $post->user_id || Auth::user()->is_admin)
            <br>
                <a href="/post/edit/{{$post->id}}"><button style="button">Edit</button></a>
                <a href="/post/delete/{{$post->id}}"><button style="button">Delete</button></a>
            @endif
        @endauth
    </div> 
</div>