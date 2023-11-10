@extends('layouts.app')
@section('content')
<div class="posts-container">
    <x-post :post="$post"/>
</div>
@endsection
@vite('resources/css/posts.css')
