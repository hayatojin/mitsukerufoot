<!--対戦チームをみつける（一覧）-->
@extends('layouts.layouts')
@section('content')
<div class="" style="position:unset; z-index:1;">
    
    <span>並び替え：</span>
    <a href="/game_list?sort=1" style="color:FF9900;">新着順</a>
    <span>｜</span>
    <a href="/game_list?sort=2" style="color:FF9900;">開催日順</a>
    <input type="text" class="form-recruit" style="width:300px;" id="keyword"><button class="btn btn-success btn--radius" id="search">検索</button>
  
            <ul class="recruit-list" style="margin-top: 25px;">
                 @foreach ($game_list as $value)
    <li class="recruit new_rec">
  <h4 class="h4-title"><!--<span class="new">NEW</span>--><a href="/game_detail?id={{$value->id}}">{{$value->title}}</a></h4>
  
  <div class="author">
      <a href="">
          <!--<img src="" alt="" style="width:20px;height:20px;">フットボールライフ-->
      </a>
  </div>
  
  <ol class="sub">
    <li class="list-data"><i class="size12 date"></i>開催日：{{$value->game_date}}</li>
    <li class="list-data"><i class="size12 spot"></i>開催エリア：{{$value->prefecture->name}}</li>
  </ol>
  <a href="/game_detail?id={{$value->id}}" class="btn btn-success btn--radius">詳細をみる</a>
</li>
<!--Jquery検索機能-->
<script>
                
    $('#search').on('click',function() {
                let keyword=$('#keyword').val();
                window.location="https://18a6f7a3b07d46879d4bcc5e298e0352.vfs.cloud9.us-east-2.amazonaws.com"+"/game_list?keyword="+keyword;
          });
            </script>

@endforeach
</ul>
</div>
@endsection
