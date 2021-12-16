<!--投稿完了時に表示する画面-->
@extends('layouts.layouts')

@section('content')
    <h1 class="text-center mt-2 mb-5">投稿が完了しました！</h1>
    <div class="text-center">
        <p>画像を登録しました！</p>
        <a href="{{ route('index') }}">トップページへ戻る</a></div>
    </div>
@endsection