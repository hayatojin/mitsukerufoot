<!--チームメイト募集記事一覧の編集画面-->
@extends('layouts.layouts')
@section('content')
<div class="" style="min-height: 100vh;">
    <ul class="recruit-list">
                 @foreach ($teammate_list as $value)
    <li class="recruit new_rec">
<h4><a href="/game_detail?id={{$value->id}}">{{$value->title}}</a></h4>

        
       <ol class="sub">
        <li style="font-size: 14px;">タイトル:{{$value->recruit_title}}</li>
        <li style="font-size: 14px;">投稿内容:{{$value->recruit_contents}}</li>
        <li style="font-size: 14px;">エリア:{{$value->prefecture_id}}</li>
        </ol>
    <a href="/teammate_edit?id={{$value->id}}" class="btn btn-success btn--radius">投稿を編集</a>
    </li>
    @endforeach
    </ul>
</div>
@endsection