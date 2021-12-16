<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; //追加
use App\Prefecture;

class UserController extends Controller
{
    //userデータの取得
    public function index() {
        $prefectures = Prefecture::get();
        $str = "";
        foreach($prefectures as $prefecture){
           $str .= '<option value="'.$prefecture->id.'">'.$prefecture->name.'</option>';
        }
        return view('user.user_index', ['user' => Auth::user(),'prefectures'=> $str ]);
    }

    //userデータの保存
    public function update(Request $request) {

        $user_form = $request->all();
        $user = Auth::user();
        //不要な「_token」の削除
        unset($user_form['_token']);
        //保存
        $user->fill($user_form)->save();
        //リダイレクト
        return redirect('/user_complete');
}

   public function complete(){
        return view('user.user_complete'); 
   }
}
