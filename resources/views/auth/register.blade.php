@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">新規会員登録</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype='multipart/form-data' style="display:inline-block;margin-left:-100px;">
                        @csrf

                        <div class="form-group row">
                            <label class="label-register">ニックネーム</label>
                                    <input id="name" type="text" class="form-register @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus required>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                          
                            
                            <div class="form-group row">
                             <label class="label-register">メールアドレス</label>
                                <input id="email" type="email" class="form-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group row">
                            <label class="label-register">パスワード</label>
                                <input id="password" type="password" class="form-register @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label class="label-register">パスワード（確認用）</label>
                                <input id="password-confirm" type="password" class="form-register" name="password_confirmation" required autocomplete="new-password" required>
                        </div>
                        
                         <!--年齢フォーム-->
                        <div class="form-group row">
                            <label class="label-register">生年月日</label>
                            <select  class="select-area select form-birthday" name="birthday">
                                {{!! $year !!}}
                            </select>
                            <select  class="select-area select form-birthday" name="birthday">
                                {{!! $month !!}}
                            </select>
                            <select  class="select-area select form-birthday" name="birthday">
                                {{!! $day !!}}
                            </select>
                        </div>
                        
                        <!--活動エリア-->
                        <div class="form-group row">
                           <label class="label-register">活動エリア</label>
                                <select class="select-area select form-register" name="area" style="width: 200px;">
                                    @foreach($prefectures as $prefecture)
                                        <option value="{{$prefecture->id}}">{{$prefecture->name}}</option>
                                        @endforeach
                                </select>
                        </div>
                        
                         <!--第一ポジション-->
                        <div class="form-group row">
                          <label class="label-register">第一ポジション</label>
                      
                            <div class="">
                                  <select class="select-position select form-register" name="position1_id" style="width: 200px;">
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
                                <!--<input id="position1_id" type="position" class="form-control" name="position1_id" required autocomplete="position1_id">-->
                            </div>
                        </div>
                        
                     <!--第二ポジション-->
                        <div class="form-group row">
                          <label class="label-register">第二ポジション(任意)</label>
                                <select class="select-position select form-register" name="position2_id" style="width: 200px;">
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
                                <!--<input id="position2_id" type="position" class="form-control" name="position2_id">-->
                            </div>
                        
                        <!--第三ポジション-->
                        <div class="form-group row">
                          <label class="label-register">第三ポジション(任意)</label>
                      
                            <div class="">
                                <select class="select-position select form-register" name="position3_id" style="width: 200px;">
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
                                <!--<input id="position3_id" type="position" class="form-control" name="position3_id">-->
                            </div>
                        </div>
                        
                        <!--自己紹介-->
                       <div class="form-group row">
                          <label class="label-register">自己紹介</label>
                      
                                <textarea class="textarea-contents form-register" rows="8" cols="70" value="" style="height:150px;" name='introduction'></textarea>
                                @error('introduction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <!--プロフィール写真-->
                        <div class="form-group row">
                            <label for="img_url" class="label-register">プロフィール写真</label>
                      
                                <input id="img_url" type="file" class="form-control form-register" name="img_url">
                            </div>

                        <button type="submit" class="btn btn-success">登録</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $('.select').select2();
</script>
@endsection
