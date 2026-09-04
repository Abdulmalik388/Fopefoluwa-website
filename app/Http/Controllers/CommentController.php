<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'comment' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create([
            'blog_id' => $blog->id,
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        $message = $request->parent_id ? 'Reply posted successfully!' : 'Comment posted successfully!';

        return redirect()->to(route('blogs.show', $blog->id) . '#comments')
            ->with('comment_success', $message);
    }
}
