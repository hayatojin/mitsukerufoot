@extends('layouts.auth')

@section('content')
<div class="container" style="min-height: 100vh;">
    <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card" style="margin-top: 100px; height: 80%;">
                <div class="card-header">パスワードをリセット</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label class="label-reset" style="margin-top: 30px; margin-right: 10px;">メールアドレス</label>
                                <input id="email" style="width:300px; margin-top: 30px; margin-right: 30px;" type="email" class="form-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group" style="margin-top: 30px;">
                                <button type="submit" class="btn btn-success">
                                    パスワード変更メールを送信
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
