<!--チームを作成する画面-->
@extends('layouts.layouts')
@section('content')
   <div class="card" style="height:100%;">
        <div class="card-header">チームの登録</div>
            <div class="card-body">
                <form method="POST" action="/team_register" style="height:100%;">
            @csrf
            <div class="form-group">
                <label class="label">チーム名</label>
                <input type="text" class="form-register" name="name" value="">
            </div>
            
             <div class="form-group">
                <label class="label">活動エリア</label>
                <select class="select-area parents select form-register" name="area">
                            @foreach($prefectures as $prefecture)
                               <option value="{{$prefecture->id}}">{{$prefecture->name}}</option>
                            @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label class="label">平均年齢</label>
                  <select class="select form-register" name="average_age">
                     <option value="1">10代</option>
                     <option value="2">20代</option>
                     <option value="3">30代</option>
                     <option value="4">40代</option>
                     <option value="5">50代</option>
                  </select>
            </div>
            
            <div class="form-group">
                <label class="label">チーム人数</label>
                 <select class="select form-register" name="number_of_people">
                    <option value="1">5名以下</option>
                    <option value="2">5~10名</option>
                    <option value="3">10~15名</option>
                    <option value="4">15~20名</option>
                    <option value="5">20~25名</option>
                    <option value="6">25~30名</option>
                    <option value="7">30名以上</option>
                 </select>
            </div>
            
             <div class="form-group">
                <label class="label">チーム画像</label>
                <input type="text" class="form-register" name="team_image" value="">
            </div>
            
             <div class="form-group">
                <label class="label">チーム紹介</label>
                <textarea class="textarea-contents  form-register" name="team_introduction" rows="8" cols="70" style="height:unset;"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">チームを作成</button>
        </form>
        <script>
         $('.select').select2();
        </script>
            </div>
        </div>
    </div>
@endsection