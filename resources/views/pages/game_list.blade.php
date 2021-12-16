<!--対戦チームをみつける（一覧）-->
@extends('layouts.layouts')
@section('content')
<div class="" style="position:unset; z-index:1;">
  
            <ul class="recruit-list">
                 @foreach ($game_list as $value)
    <li class="recruit new_rec">
  <h4><span class="new">NEW</span><a href="/game_detail?id={{$value->id}}">{{$value->title}}</a></h4>
  
  <div class="author">
      <a href="">
          <!--<img src="" alt="" style="width:20px;height:20px;">フットボールライフ-->
      </a>
  </div>
  
  <ol class="sub">
      <li style="font-size: 14px;"><i class="size12 date"></i>開催日：{{$value->game_date}}</li>
      <li style="font-size: 14px;"><i class="size12 date"></i>開催時間：{{$value->game_date}}</li>
    <li style="font-size: 14px;"><i class="size12 spot"></i>開催エリア：{{$value->prefecture_id}}</li>
  </ol>
  <a href="/game_detail?id={{$value->id}}" class="btn btn-success btn--radius">詳細をみる</a>
</li>
@endforeach
</ul>
        </div>
        @endsection
