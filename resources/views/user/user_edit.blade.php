<!--ユーザー情報変更の確認画面-->

@extends('layouts.layouts')
@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">変更内容の確認</div>
        <div class="card-body">
          <form method="POST" action="{{ action('Admin\UserController@update') }}">
            
            <div class="form-group">
              <label class="label">ニックネーム</label>
                <input class="form-register" name="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
              <label class="label">メールアドレス</label>
                <input class="form-control" name="email" value="{{ $user->email }}">
            </div>
            
            <div class="form-group">
              <label class="label">パスワード</label>
              <input class="form-control" name="password" value="{{ $user->password }}">
            </div>
            
            <div class="form-group">
                <label class="label">活動エリア</label>
                <input class="form-control" name="area" value="{{ $user->area }}">
            </div>
            
            <div class="form-group">
                <label class="label">第一ポジション</label>
                <input class="form-control" name="position1_id" value="{{ $user->position1_id }}">
            </div>
            
            <div class="form-group">
                <label class="label">第二ポジション</label>
                <input class="form-control" name="position2_id" value="{{ $user->position2_id }}">
            </div>
            
            <div class="form-group">
                <label class="label">第三ポジション</label>
                <input class="form-control" name="position3_id" value="{{ $user->position3_id }}">
            </div>
            
            <div class="form-group">
                <label class="label">自己紹介</label>
                  <textarea class="textarea-contents" rows="8" cols="70" value="{{ $user->introduction }}"></textarea>
            </div>
            
            <div class="form-group">
                <label class="label">プロフィール写真</label>
                <input id="img_url" type="file" class="form-control" name="img_url" value="{{ $user->img_url }}" required autocomplete="img_url">
            </div>
            
              <button type="submit" class="user-btn">確認</button>
              {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection