@extends('layouts.app')
@section('content')
<div class="posts-container">
    @foreach ($posts as $post)
        <x-post :post="$post"/>
    @endforeach
</div>
<div>
    <a href="/post/new"><button class="btn button">Create new post</button></a>
</div>
@vite('resources/css/posts.css')
@endsection