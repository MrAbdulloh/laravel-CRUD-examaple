<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request)
    {
        return Post::factory()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
    }

    public function show($id)
    {
        return Post::query()->findOrFail($id);
    }

    public function update(Post $post,Request $request)
    {
        return Post::query()->update([
            'title' => $request->title,
            'body'=>$request->body
        ]);
    }

}
