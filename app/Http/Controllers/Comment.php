<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Comment extends Controller
{
    public function send(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'comment'=>'required',
        ]);
        $comment=[];
        $comment['post_id'] = $request->post_id;
        $comment['name'] = $request->name;
        $comment['email'] = $request->email;
        $comment['comment'] = $request->comment;
        $comment['created_at'] = Carbon::now();
        $add_comment = \App\Model\Comment::insert($comment);
        $notification = array(
            'message' => "Thanks For your comment",
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}
