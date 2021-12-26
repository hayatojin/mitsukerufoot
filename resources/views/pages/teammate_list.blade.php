<!--チームメイトをみつける（一覧）-->
@extends('layouts.layouts')
@section('content')
<div class="">
    <ul class="recruit-list">
                 @foreach ($teammate_list as $value)
    <li class="recruit new_rec">
<h4><a href="/game_detail?id={{$value->id}}">{{$value->title}}</a></h4>

        
       <ol class="sub">
        <li style="font-size: 14px;">タイトル:{{$value->recruit_title}}</li>
        <li style="font-size: 14px;">投稿内容:{{$value->recruit_contents}}</li>
        <li style="font-size: 14px;">エリア:{{$prefecture[0]->name}}</li>
        </ol>
    <a href="/teammate_detail?id={{$value->id}}" class="btn btn-success btn--radius">詳細をみる</a>
    </li>
    @endforeach
    </ul>
</div>
@endsection
