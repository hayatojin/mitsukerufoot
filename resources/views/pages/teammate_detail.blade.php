@extends('layouts.layouts')
@section('content')
<div class="card" style="min-height: 100vh;">
           <div class="card-header">募集中のチーム詳細</div>
        <div class="card-body">
           
       <table class="detail" style="margin:auto; text-align:center;">
           
       <tbody>
        <tr>
         <th>タイトル</th>
           <td class="title">{{$teammate_detail->recruit_title}}</td>
        </tr>
        
       <tr>
         <th>チーム名</th>
           <td class="name">
             {{$team->name}}
           </td>   
       </tr>
       
       <tr>
         <th>チームID</th>
           <td class="team_id">
             {{$teammate_detail->team_id}}
           </td>   
       </tr>
       
       <tr>
         <th>開催場所</th>  
           <td class="prefecture_id">
             {{$teammate_detail->prefecture_id}}  
           </td>
       </tr>
        
       <tr>
         <th>募集ポジション</th>  
           <td class="position1_id">
             {{$teammate_detail->position1_id}}  
           </td>
       </tr>
       
       <tr>
         <th style="height:200px;">募集内容</th>  
           <td class="recruit_contents" style="height:200px;">
             {{$teammate_detail->recruit_contents}}  
           </td>
       </tr>
     </tbody>
   </table>
</div> 
<a href="#"><button class="btn btn-success" style="margin:0 0 50 0px;">投稿者と連絡をとる</button></a>
</div> 
</div> 
   </div>
@endsection
