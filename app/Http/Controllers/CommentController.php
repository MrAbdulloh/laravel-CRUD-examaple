<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $comment = Comment::query()->create([
            'title' => $request->title,
            'contents' => $request->contents,
            'comment' => $request->comment
        ]);
        return $comment;
    }

    public function show($id)
    {
        return Comment::query()->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::query()->findOrFail($id);
        $comment->update([
            'title' => $request->title,
            'contents' => $request->contents,
            'comment' => $request->comment
        ]);
        return $comment;
    }
}

