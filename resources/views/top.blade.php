<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
        </head>
        <body>
@if(!Auth::check())
<div id="login-wrapper" class="row" style="height:100%;">
    <div class="col-7">
        <h1 class="text-white"><b>Hello football players！</b></h1>
        <p class="text-white"><br>みつけるフットボールでは、対戦チームやサッカー仲間を手軽にみつけることができます！<br>理想の対戦チーム、チームメイトを探してみませんか？</p>
    </div>
    <div class="col-5" style="padding-top:100px;">
        <form method="POST" style="margin-top:unset;" action="{{ route('login') }}">
            @csrf
            <table class="login">
                <tr>
                    <th class="top-th">メールアドレス</th>
                    <td><input type="email" class="top-form" placeholder="mitsukerufoot@football.com" size="50" name="email" required></td>
                </tr>
                <tr>
                    <th class="top-th">パスワード</th>
                    <td><input type="password" class="top-form" name="password" required size="50"></td>
                </tr>
                <tr class="top-tr">
                    <th class="top-th"></th>
                    <td><a href="/login" class="top-form2 btn btn--orange">ログイン</a>
                    <a href="/register" class="top-form2 btn btn--orange">会員登録</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@else
@endif
</body>
</html>