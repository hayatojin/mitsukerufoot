<nav class="navbar navbar-expand-lg navbar-light font-weight-bold" style="background-color:#55C501;">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">みつけるフットボール</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 gnav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/game_list">募集中の試合</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/teammate_list">募集中のチーム</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/games">対戦チームの募集</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/teammates">チームメイトの募集</a>
        </li>
        
        <li class="nav-item" style="z-index:99;">
         <a class="nav-link" href="">マイぺージ</a>
          <ul style="width: 100%; padding: 0;">
            <li class="nav-item" style="width: 100%;"><a class="nav-link" href="/edit_game_list">試合募集の編集</a></li>
            <li class="nav-item" style="width: 100%;"><a class="nav-link" href="/edit_teammate_list">チームメイト募集の編集</a></li>
            <li class="nav-item" style="width: 100%;"><a class="nav-link" href="/user_index">ユーザー情報の編集</a></li>
            <li class="nav-item" style="width: 100%;"><a class="nav-link" href="/team_register">チーム情報の登録</a></li>
            <li class="nav-item" style="width: 100%;"><a class="nav-link" href="/team_edit">チーム情報の編集</a></li>
            <li class="nav-item" style="width: 100%;"><a class="nav-link" href="{{ route('password.form') }}">パスワードの変更</a></li>
         </ul>
        </li>
      </ul>
      
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
           @auth
            <li class="nav-item">
                <a class="nav-in btn btn--orange" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                </form>
           </li>
            @else
            <li class="nav-form">
               <a class="nav-in btn btn--orange" href="{{ route('register') }}">{{ __('新規登録') }}</a>
           </li>
            <li class="nav-form ml-1">
                <a class="nav-in btn btn--orange" href="{{ route('login') }}">{{ __('ログイン') }}</a>
            </li>
            @endauth
        </ul>
        
    </div>
    </div>
  </div>
</nav>