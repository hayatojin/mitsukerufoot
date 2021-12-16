<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\team_chat_room;

class TeamChatRoom extends Controller
{
    public function index(Request $request){
        $message = new TeamChatRoom();
        $message->team_id=$request->input('team_id');
        $message->user_id=$request->input('user_id');
        $message->send_flg=$request->input('send_flg');
        $message->read_flg=$request->input('read_flg');
        $message->message=$request->input('message');
        $message->img_message=$request->input('img_message');
        return view('welcome');
    }
}
