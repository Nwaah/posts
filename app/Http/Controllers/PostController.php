<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePostRequest $request)
    public function store($request)
    {
        $current_user = Auth::id();
        $post = Post::create([
            'user_id' => $current_user ?? 1,
            'content' => $request->content,
        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Post $post)
    public function show(int $id)
    {
        $post = Post::find($id);
        return view('post.show', ["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', ["post"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(Auth::id() == $post->user_id || Auth::user()->is_admin) {
            $post->destroy($post->id);
        }
        return redirect('/post');
    }
}
