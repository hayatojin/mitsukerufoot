<!--チーム編集の完了画面-->

@extends('layouts.layouts')
@section('content')

<h1>チーム情報の変更が完了しました！</h1>
<a href="{{ action('RecruitmentGameController@show') }}"><button type="submit" class="btn btn-primary">トップへ戻る</button></a>

@endsection