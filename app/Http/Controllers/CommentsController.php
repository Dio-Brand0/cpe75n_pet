<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Topics;
use Illuminate\Support\Facades\View;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Display a listing of comments with a topic id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFromTopic($title)
    {
        //
        $title = urldecode($title);
        $topic = Topics::where('title', $title)->first();
        $comments = Comments::where('topic_id', $topic->id)
                    ->orderBy('comments.created_at', 'desc')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->get();
        return View::make('topic')->with('comments', $comments)->with('topic', $topic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comment = new Comments;
        $comment->message = $data['message'];
        $comment->topic_id = $data['topic_id'];
        $comment->user_id = $request->session()->get('id');
        $comment->save();
        return redirect('forum/'.$data['title']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
