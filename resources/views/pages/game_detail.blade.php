@extends('layouts.layouts')
@section('content')
       <div class="card" style="min-height: 100vh;">
           <div class="card-header">募集中の試合詳細</div>
        <div class="card-body">
        
        <table class="detail" style="margin:auto; text-align:center;">
        <tbody>
            <tr>
                <th>試合タイトル</th>
                <td class="">{{$game_detail[0]->title}}</td>
            </tr>
            
            <tr>
                <th>チーム名</th>
                <td class="">{{$team[0]->name}}</td>
            </tr>
     
            <tr>
                <th>チームID</th>
                <td class="">{{$team[0]->team_id}}</td>
            </tr>
              
            <tr>
                <th>募集者</th>
                <td class="">{{$game_detail[0]->user_id}}</td>
            </tr>
              
            <tr>
                <th>開催場所：都道府県</th>
                <td class="">{{$game_detail[0]->prefecture_id}}</td>
            </tr>
              
            <tr>
                <th>開催場所：市区町村</th>
                <td class="">{{$game_detail[0]->municipalities_id}}</td>
            </tr>
            
            <tr>
                <th>開催日</th>
                <td class="">{{$game_detail[0]->game_date}}</td>
            </tr> 
              
            <tr>
                <th>開催時間</th>
                <td class="">{{$game_detail[0]->game_time}}</td>
            </tr> 
            
            <tr>
                <th style="height:200px;">開催内容</th>
                <td class="recruit_contents" style="height:200px;">{{$game_detail[0]->contents}}</td>
            </tr>  
            
        </tbody>
    </table>
            
    <div id="modal-content" style="left: 180px; top: 233px; display: none;">
	  <!-- モーダルウィンドウのコンテンツ開始 -->
	    <p>以下の連絡先にてメールでやり取りをお願いします</p>
	      <p>{{$user->email}}</p>
	        <p><a id="modal-close" class="button-link">閉じる</a></p>
	  <!-- モーダルウィンドウのコンテンツ終了 -->
    </div>
          
    <p><a id="modal-open" class="btn btn-success" style="margin:50 0 0 0px;">投稿者と連絡をとる</a></p>
　　　　　　<!-- ここまでモーダルウィンドウ -->
    </div>
   </div>
@endsection
