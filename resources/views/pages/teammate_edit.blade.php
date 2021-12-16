<!--チームメイト募集記事の編集-->
@extends('layouts.layouts')
@section('content')
<div class="card" style="position:unset; min-height: 100vh;">
      <div class="card-header">編集フォーム</div>
        <div class="card-body">
            <form method="POST" action="/teammate_update">
                @csrf
                <input type='hidden' name='id' value='{{ $teammate_edit[0]->id }}'>
                
                <div class="form-group">
                    <label for="">チーム名</label>
                    <input type='text' class="form-recruit" name='team_id' value='{{ $teammate_edit[0]->team_id }}'>
                </div>
                
                 <div class="form-group">
                    <label for="">募集タイトル</label>
                    <input type='text' class="form-recruit" name='recruit_title' value='{{ $teammate_edit[0]->recruit_title }}'>
                </div>
                
                 <div class="form-group">
                    <label for="">メイン活動エリア</label>
                    <input type='text' class="form-recruit" name='prefecture_id' value='{{ $teammate_edit[0]->prefecture_id }}'>
                </div>
            
                 <div class="form-group">
                    <label for="">第一ポジション</label>
                    <input type='text' class="form-recruit" name='position1_id' value='{{ $teammate_edit[0]->position1_id }}'>
                </div>
                
                <div class="form-group">
                    <label for="">募集内容</label>
                    <textarea class="textarea-contents  form-recruit" name="contents" rows="8" cols="70" name='recruit_contents' value='{{ $teammate_edit[0]->recruit_contents }}' style="height:unset;"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">編集を完了する</button>
            </form>
            </div>
        </div>
    </div>
@endsection