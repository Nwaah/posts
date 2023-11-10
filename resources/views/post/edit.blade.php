@extends('layouts.app')
@section('content')
<div class="posts-container">
    <div class="post"> 
        <div class="username"><b>{{ $post->user_id }}</b></div>
        <div class="content">
            <input hidden type="hidden" name="id" value="{{$post->id}}" disabled/>
            <input id="edit-content" type="textarea" name="content" value="{{$post->content}}"></div>
            <button title="Save" onclick="save">Save</button>
            <a href="/post"><button title="Cancel"></button></a>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    function save(){
        //send ajax
        var content = document.getElementById("edit-content").text();
    }
</script>
@vite('resources/css/posts.css')