<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecruitmentGame;
use App\Team;
use Log;
use Illuminate\Support\Facades\Auth;
use App\Prefecture;
use App\City;


class RecruitmentGameController extends Controller
{
    //対戦チーム募集記事の画面表示／都道府県データ、市区町村データの代入
    public function pref(Request $request){
        $prefectures = Prefecture::get();
        $cities = City::get();
        $teams = Team::get();
        return view('pages.recruitmentgames',compact("prefectures","cities","teams"));
    }
    
    //対戦チームを募集する記事の保存
    public function index(Request $request){
        if ($file = $request->file('img_url')) {
            $file = $request->file('img_url');
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
         } else {
             $fileName = "";
             $target_path="";
             //$target_pathがない時の処理
         }
       $recruit = new RecruitmentGame();
       $recruit->team_id=$request->input('team_id');
       $recruit->user_id=Auth::id();
       $recruit->title=$request->input('title');
       $recruit->contents=$request->input('contents');
       $recruit->game_date=$request->input('game_date');
       $recruit->game_time=$request->input('game_time');
       $recruit->prefecture_id=$request->input('prefecture_id');
       $recruit->municipalities_id=$request->input('municipalities_id');
       $recruit->image_url=$target_path;
       $recruit->save();
       return redirect('/game_list');
    }
    
     //対戦チームの募集記事の一覧
    public function show(Request $request){
        $game_list = RecruitmentGame::get();
        return view('pages.game_list',compact("game_list"));
}

    //対戦チーム募集記事の編集一覧
 public function edit_list(Request $request){
        $id=Auth::id();
        $game_list = RecruitmentGame::where('user_id',$id)->get();
        return view('pages.edit_game_list',compact("game_list"));
}

//試合の詳細
public function detail(Request $request){
    $id=$request->input('id');
     $game_detail = RecruitmentGame::where('id',$id)->get();
     Log::debug('$game_detail="'.$game_detail.'"');
     $team = Team::where('id',$game_detail[0]->team_id)->get();
     Log::debug('$team="'.$team.'"');
     $user = Auth::user();
     return view('pages.game_detail',compact("game_detail","team","user"));
}

//試合の編集
public function edit(Request $request){
     $id=$request->input('id');
     Log::debug('$id="'.$id.'"');
     $game_edit = RecruitmentGame::where('id',$id)->get();
     Log::debug('$game_edit="'.$game_edit.'"');
     //$team = Team::where('id',$game_edit[0]->team_id)->get();
     $prefectures = Prefecture::get();
     $str = '';
     foreach($prefectures as $prefecture){
      if($prefecture->id == $game_edit[0]->prefecture_id){
       $str .= '<option value="'.$prefecture->id.'" selected>'.$prefecture->name.'</option>';
        } else{
       $str .= '<option value="'.$prefecture->id.'">'.$prefecture->name.'</option>';
       }
     }
        return view('pages.game_edit',['game_edit'=>$game_edit,'prefectures'=>$str]);
}

//編集した記事の更新
 public function update(Request $request){
     $prm = $request->all();
     Log::debug($prm);
       $id=$request->input('id');
       $game_update = RecruitmentGame::where('id',$id)->first();
       Log::debug('$game_update="'.$game_update.'"');
       $game_update->team_id=$request->input('team_id');
       $game_update->user_id=Auth::id();
       $user = Auth::user();
       Log::debug('userID='.$user);
       $game_update->title=$request->input('title');
       $game_update->contents=$request->input('contents');
       $game_update->game_date=$request->input('game_date');
       $game_update->game_time=$request->input('game_time');
       $game_update->prefecture_id=$request->input('prefecture_id');
       $game_update->municipalities_id=$request->input('municipalities_id');
       $game_update->save();
       return redirect('/game_list');
    }
    
    //都道府県と市区町村の連動
     public function ajax(Request $request){
       $cities = City::where('prefecture_id',$request->input('prefecture_id'))->get();
        $str = "";
        foreach($cities as $city){
           $str .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }
       return response()->json(['status'=>'200','message'=>'success','data'=>$str]);
   }
}
