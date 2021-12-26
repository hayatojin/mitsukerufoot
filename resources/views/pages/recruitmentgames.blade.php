<!--対戦チームを募集する画面（記事投稿)-->
@extends('layouts.layouts')
@section('content')
    <div class="card">
      <div class="card-header">対戦チームの募集</div>
        <div class="card-body">
            <form method="POST" action="/recruitment_games">
                @csrf
                <input type="hidden" name="user_id" value="">
                
                <div class="form-group">
                    <label class="label">チーム名</label>
                    <select class="select-area parents select form-recruit" name="team_id" id="team_id">
                            @foreach($teams as $team)
                               <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                     </select>
                </div>
                
                 <div class="form-group">
                    <label class="label">試合タイトル</label>
                    <input type="text" class="form-recruit" name="title" value="">
                </div>
                
                 <div class="form-group">
                    <label class="label">開催日</label>
                    <input type="date" name="game_date"  class="form-recruit" max="9999-12-31">
                </div>
                
                <div class="form-group">
                    <label class="label">開催時間</label>
                    <input type="time" class="form-recruit" name="game_time" value="">
                </div>
                
                 <div class="form-group">
                     <label class="label">開催エリア：都道府県</label>
                     <select class="select-area parents select form-recruit" name="prefecture_id" id="prefecture_id" value="">
                            @foreach($prefectures as $prefecture)
                               <option value="{{$prefecture->id}}">{{$prefecture->name}}</option>
                            @endforeach
                     </select>
                </div>
                
                <div class="form-group">
                    <label class="label">開催エリア：市区町村</label>
                    <select class="select-area children select form-recruit" name="municipalities_id" id="municipalities_id" value="">
                            @foreach($cities as $city)
                               <option value="{{$city->id}}" data-val="{{$city->prefecture_id}}">{{$city->name}}</option>
                            @endforeach
                     </select>
                </div>
                
                <div class="form-group">
                    <label class="label" style="vertical-align:top;">試合内容</label>
                    <textarea class="textarea-contents  form-recruit" name="contents" rows="8" cols="70" value="" style="height:unset;"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">投稿する</button>
            </form>
            <script>
                $('.select').select2();
                
                $('#prefecture_id').change(function() {
                $("#municipalities_id").html("");
                let prefecture_id=$('#prefecture_id').val();
                var dt = {prefecture_id:prefecture_id};
                $.ajax({
                headers:{
               'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
                type: "GET",
                url: "/pref/ajax",
                dataType : "json",
                data:dt,
            })
                .done(function(res){
                $("#municipalities_id").html(res.data);
            })
                .fail(function(data){
                alert(errorThrown);
            });
          });
            </script>
            </div>
        </div>
    </div>
@endsection