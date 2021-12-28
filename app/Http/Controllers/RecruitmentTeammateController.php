<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecruitmentTeammate;
use Illuminate\Support\Facades\Auth;
use Log;
use App\User;
use App\Team;
use App\Prefecture;
use App\Positon;

class RecruitmentTeammateController extends Controller
{
     //チームメイト募集記事の画面表示／都道府県データの代入
    public function pref(Request $request){
        $prefectures = Prefecture::get();
        $positons = Positon::get();
        $teams = Team::get();
        return view('pages.recruitmentteammates',compact("prefectures","positons","teams"));
    }
        
    //チームメイトを募集する記事の保存
    public function index(Request $request){
        $recruit = new RecruitmentTeammate();
        $recruit->team_id=$request->input('team_id');
        $recruit->user_id=Auth::id();
        $recruit->recruit_title=$request->input('recruit_title');
        $recruit->recruit_contents=$request->input('recruit_contents');
        $recruit->prefecture_id=$request->input('prefecture_id');
        $recruit->position1_id=$request->input('position1_id');
        $recruit->save();
        return redirect('/teammate_list');
    }
    
    //チームメイト募集記事の一覧が見れる
    public function show(Request $request){
        $input=$request->all();//if文でチェックするためにリクエストで取得
        if(array_key_exists('keyword',$input)){
            $keyword=$request->input('keyword');
        $teammate_list = RecruitmentTeammate::where('recruit_title','like',"%$keyword%")->orWhere('recruit_contents','like',"%$keyword%")->get();
        }else{
        $teammate_list = RecruitmentTeammate::orderBy("desc")->get();
        }
        $prefecture = Prefecture::get();
        $position = Positon::get();
        return view('pages.teammate_list',compact("teammate_list","prefecture","position"));
        
        $user_id = Auth::id();
       //Log::debug($user_id);
}

//チームメイト募集記事の編集一覧
 public function edit_list(Request $request){
        $id=Auth::id();
        $teammate_list = RecruitmentTeammate::where('user_id',$id)->get();
        return view('pages.edit_teammate_list',compact("teammate_list"));
}

//募集記事の詳細
public function detail(Request $request){
    $id=$request->input('id');
     $teammate_detail = RecruitmentTeammate::where('id',$id)->get();
     Log::debug($teammate_detail[0]);
     $team = Team::where('id',$teammate_detail[0]->team_id)->get();
    $prefectures = Prefecture::get();
    $position = Positon::get();
    $user = Auth::user();
     return view('pages.teammate_detail',compact("teammate_detail","user","team","prefectures","position"));
}

//募集記事の編集
public function edit(Request $request){
     $id=$request->input('id');
     $teammate_edit = RecruitmentTeammate::where('id',$id)->get();
     return view('pages.teammate_edit',compact("teammate_edit"));
}

//編集した記事の更新
 public function update(Request $request){
     $prm = $request->all();
       $id=$request->input('id');
       $teammate_update = RecruitmentTeammate::where('id',$id)->first();
       $teammate_update->team_id=$request->input('team_id');
       $teammate_update->user_id=Auth::id();
       $user_id = Auth::id();
       Log::debug('user_id'.$user_id);
       $teammate_update->recruit_title=$request->input('recruit_title');
       $teammate_update->recruit_contents=$request->input('recruit_contents');
       $teammate_update->prefecture_id=$request->input('prefecture_id');
       $teammate_update->position1_id=$request->input('position1_id');
       $teammate_update->save();
       return redirect('/teammate_list');
    }
}
