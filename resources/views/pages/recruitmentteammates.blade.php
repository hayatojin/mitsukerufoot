<!--チームメイトを募集する画面（記事投稿）-->
@extends('layouts.layouts')
@section('content')
   <div class="card" style="height:100%;">
      <div class="card-header">チームメイトの募集</div>
        <div class="card-body">
            <form method="POST" action="/recruitment_teammates">
                @csrf
                <div class="form-group">
                    <label class="label">チーム名</label>
                    <select class="select-area select form-recruit" name="team_id">
                            @foreach($teams as $team)
                               <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                     </select>
                </div>
                
                 <div class="form-group">
                    <label class="label">募集タイトル</label>
                    <input type="text" class="form-recruit" name="recruit_title" value="">
                </div>
                
                <div class="form-group">
                    <label class="label">メイン活動エリア</label>
                    <select class="select-area select form-recruit" name="prefecture_id">
                            @foreach($prefectures as $prefecture)
                               <option value="{{$prefecture->id}}">{{$prefecture->name}}</option>
                            @endforeach
                     </select>
                </div>
                
                 <div class="form-group">
                    <label class="label">募集ポジション</label>
                    <select class="select-area select form-recruit" name="position1_id">
                        @foreach($positons as $positon)
                            <option value="{{$positon->id}}">{{$positon->name}}</option>
                        @endforeach
                      </select>
                </div>
                
                <div class="form-group">
                    <label class="label" style="vertical-align:top;">募集内容</label>
                    <textarea class="textarea-contents form-recruit" name="recruit_contents" style="height:unset;" rows="8" cols="70" value=""></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">投稿する</button>
            </form>
            <script>
                $('.select').select2();
            </script>
            </div>
        </div>
    </div>
@endsection

