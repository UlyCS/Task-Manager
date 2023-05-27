<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Task $task)
    {
        $attributes = $request->validate([
            'body' => 'required'
        ]);
        $attributes['task_id'] = $task->id;
        $attributes['user_id'] = auth()->user()->id;
        Comment::create($attributes);
        return back();
    }
}