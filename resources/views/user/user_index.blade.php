<!--ユーザー情報の変更画面-->

@extends('layouts.layouts')
@section('content')
      <div class="card">
        <div class="card-header">ユーザー登録内容の変更</div>
        <div class="card-body">
          
            <div class="form-group">
              <label class="label">ニックネーム</label>
               <input class="form-register" value="{{ $user->name }}">
              </div>
              
              <div class="form-group">
                <label class="label">メールアドレス</label>
                <input class="form-register" value="{{ $user->email }}">
              </div>
          
            <div class="form-group">
              <label class="label">パスワード</label>
              <input class="form-register" value="{{ $user->password }}">
            </div>
             
             <div class="form-group">
                <label class="label">活動エリア</label>
                <select class="select form-register" value="{{ $user->area }}" name="area">
                   {{!! $prefectures !!}}
                </select>
              </div>
           
             <div class="form-group">
                <label class="label">第一ポジション</label>

                <select class="select form-register" name="position1_id" value="{{ $user->position1_id }}">
                  <option value="1">CF</option>
                  <option value="2">ST</option>
                  <option value="3">RWG</option>
                  <option value="4">LWG</option>
                  <option value="5">RMF</option>
                  <option value="6">LMF</option>
                  <option value="7">OMF</option>
                  <option value="8">CMF</option>
                  <option value="9">DMF</option>
                  <option value="10">RSB</option>
                  <option value="11">LSB</option>
                  <option value="12">CB</option>
                  <option value="13">GK</option>
                </select>

            </div>
              
            <div class="form-group">
                <label class="label">第二ポジション</label>

                <select class="select form-register" name="position2_id" value="{{ $user->position2_id }}">
                  <option value="1">CF</option>
                  <option value="2">ST</option>
                  <option value="3">RWG</option>
                  <option value="4">LWG</option>
                  <option value="5">RMF</option>
                  <option value="6">LMF</option>
                  <option value="7">OMF</option>
                  <option value="8">CMF</option>
                  <option value="9">DMF</option>
                  <option value="10">RSB</option>
                  <option value="11">LSB</option>
                  <option value="12">CB</option>
                  <option value="13">GK</option>
                </select>

            </div>
            
            <div class="form-group">
                <label class="label">第三ポジション</label>
  
                <select class="select form-register" name="position3_id" value="{{ $user->position3_id }}">
                  <option value="1">CF</option>
                  <option value="2">ST</option>
                  <option value="3">RWG</option>
                  <option value="4">LWG</option>
                  <option value="5">RMF</option>
                  <option value="6">LMF</option>
                  <option value="7">OMF</option>
                  <option value="8">CMF</option>
                  <option value="9">DMF</option>
                  <option value="10">RSB</option>
                  <option value="11">LSB</option>
                  <option value="12">CB</option>
                  <option value="13">GK</option>
                </select>

            </div>
           
           <div class="form-group">
                <label class="label" style="vertical-align:top;">自己紹介</label>
                  <textarea class="textarea-contents form-register" style="height:unset;" rows="8" cols="70">{{ $user->introduction }}</textarea>
            </div>
            
            <div class="form-group">
                <label class="label">プロフィール写真</label>
                <input id="img_url" type="file" class="form-register" name="img_url" value="{{ $user->img_url }}" required autocomplete="img_url">
            </div>
           
           <div class="form-group">

               <a href="{{ action('Admin\UserController@update') }}"><button class="btn btn-success">登録内容を編集</button></a>
    </div>
  </div>
</div>
</div>
<script>
      $('.select').select2();
</script>
@endsection