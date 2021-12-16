<!--チーム登録の編集画面-->

@extends('layouts.layouts')
@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">登録チームの編集</div>
        <div class="card-body">
          <form method="POST" action="/team_update">
            @foreach($teams as $team) 
            <div class="form-group">
              <label class="label">チーム名</label>
                <input class="form-control" name="name" value="{{ $team->name }}">
            </div>

            <div class="form-group">
              <label class="label">活動エリア</label>
                <input class="form-control" name="area" value="{{ $team->area }}">
            </div>
            
            <div class="form-group">
              <label class="label">平均年齢</label>
              <input class="form-control" name="average_age" value="{{ $team->average_age }}">
            </div>
            
            <div class="form-group">
                <label class="label">チーム人数</label>
                <input class="form-control" name="number_of_people" value="{{ $team->number_of_people }}">
            </div>
            
            <div class="form-group">
                <label class="label">チーム画像</label>
                <input class="form-control" name="team_image'" value="{{ $team->team_image }}">
            </div>
            
            <div class="form-group">
                <label class="label"チーム紹介</label>
                <input class="form-control" name="team_introduction" value="{{ $team->team_introduction }}">
            </div>
            
              <button type="submit" class="user-btn">確認</button>
              {{ csrf_field() }}
            @endforeach
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection