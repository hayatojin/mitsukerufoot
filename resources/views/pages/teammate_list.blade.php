<!--チームメイトをみつける（一覧）-->
@extends('layouts.layouts')
@section('content')
<div class="">
    
    <input type="text" class="form-recruit" style="width:300px;" id="keyword"><button class="btn btn-success btn--radius" id="search">検索</button>
    
    <ul class="recruit-list" style="margin-top: 25px;">
                 @foreach ($teammate_list as $value)
    <li class="recruit new_rec">
<h4 class="h4-title"><a href="/teammate_detail?id={{$value->id}}">{{$value->recruit_title}}</a></h4>

        
       <ol class="sub">
        <li class="list-data">エリア:{{$value->prefecture->name}}</li>
        <li class="list-data">ポジション:{{$value->position->name}}</li>
        </ol>
    <a href="/teammate_detail?id={{$value->id}}" class="btn btn-success btn--radius">詳細をみる</a>
    </li>
    
    <script>
    $('#search').on('click',function() {
                let keyword=$('#keyword').val();
                window.location="https://18a6f7a3b07d46879d4bcc5e298e0352.vfs.cloud9.us-east-2.amazonaws.com"+"/teammate_list?keyword="+keyword;
          });
    </script>
    
    @endforeach
    </ul>
</div>
@endsection
