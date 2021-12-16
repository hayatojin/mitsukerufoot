<!--対戦チーム募集記事の編集-->
@extends('layouts.layouts')
@section('content')
<div class="card" style="position:unset; min-height: 100vh;">
      <div class="card-header">編集フォーム</div>
        <div class="card-body">
            <form method="POST" action="/game_update">
                @csrf
                <input type='hidden' name='id' value='{{ $game_edit[0]->id }}'>
                
                <div class="form-group">
                    <label class="label">チーム名</label>
                    <input type='text' class="form-recruit" name='team_id' value='{{ $game_edit[0]->team_id }}'>
                </div>
                
                 <div class="form-group">
                    <label class="label">試合タイトル</label>
                    <input type='text' class="form-recruit" name='title' value='{{ $game_edit[0]->title }}'>
                </div>
                
                 <div class="form-group">
                    <label class="label">開催日</label>
                    <input type='date' class="form-recruit" name='game_date' value='{{ $game_edit[0]->game_date }}'>
                </div>
                
                <div class="form-group">
                    <label class="label">開催時間</label>
                    <input type='time' class="form-recruit" name='game_time' value='{{ $game_edit[0]->game_time }}'>
                </div>
                
                 <div class="form-group">
                    <label class="label">開催エリア：都道府県</label>
                    <select class="select form-register" value="{{ $game_edit[0]->prefecture_id}}" name="prefecture_id">
                   {{!! $prefectures !!}}
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="label">開催エリア：市区町村</label>
                    <input type='text' class="form-recruit" name='municipalities_id' value='{{ $game_edit[0]->municipalities_id }}'>
                </div>
                
                <div class="form-group">
                    <label class="label">試合内容</label>
                    <textarea class="textarea-contents  form-recruit" name="contents" rows="8" cols="70" style="height:unset;">{{ $game_edit[0]->contents }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-success">編集を完了する</button>
            </form>
            <script>
                $('.select').select2();
            </script>
            </div>
        </div>
    </div>
@endsection