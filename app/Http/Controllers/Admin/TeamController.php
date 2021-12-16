<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use App\User;//追加
use App\Team;
use Log;
use App\Prefecture;

class TeamController extends Controller
{
    public function pref(Request $request){
        $prefectures = Prefecture::get();
        return view('team.team_register',compact("prefectures"));
    }
    
     //チーム登録データの保存
     public function index(Request $request){
      $team = new Team();
      $team->name=$request->input('name');
      $team->area=$request->input('area');
      $team->average_age=$request->input('average_age');
      $team->number_of_people=$request->input('number_of_people');
      $team->team_image=$request->input('team_image');
      $team->team_introduction=$request->input('team_introduction');
      $team->save();
      return redirect('/team_complete');
}

public function show(Request $request){
        $id=$request->input('id');
        $team = Team::get();
        return view('team.team_edit',compact("team"));
}

    //登録チームの編集
public function edit(Request $request){
     $id=$request->input('id');
     $teams = Team::where('id',$id)->get();
     return view('team.team_edit',compact("teams"));
}

    //登録チームの更新
public function update(Request $request){
     $prm = $request->all();
       $id=$request->input('id');
       $team_update = Team::where('id',$id)->first();
       $team_update->name=$request->input('name');
       $team_update->user_id=Auth::id();
       $user_id = Auth::id();
       Log::debug('user_id'.$user_id);
       $team_update->area=$request->input('area');
       $team_update->average_age=$request->input('average_age');
       $team_update->number_of_people=$request->input('number_of_people');
       $team_update->team_image=$request->input('team_image');
       $team_update->team_introduction=$request->input('team_introduction');
       $team_update->save();
       return redirect('/team_edit_complete');
    }

public function complete(){
        return view('team.team_complete'); 
   }
}
