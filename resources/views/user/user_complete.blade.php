<!--ユーザー情報の変更の完了画面-->

@extends('layouts.layouts')
@section('content')

<div style="min-height: 100vh;">
<h1 style="line-height: 15em;">ユーザー情報の変更が完了しました！</h1>
<a href="{{ action('RecruitmentGameController@show') }}"><button type="submit" class="btn btn-success">トップへ戻る</button></a>
</div>
@endsection