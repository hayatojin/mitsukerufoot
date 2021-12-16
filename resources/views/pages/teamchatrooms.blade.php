@extends('layouts.layouts')

@section('title', 'teamchatrooms')

@section('content')

<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form method="POST" action="/teamchatrooms">
                @csrf
                <div class="form-group">
                    <label for="">team_id</label>
                    <input type="text" class="form-control" name="team_id" value="">
                </div>
                
                 <div class="form-group">
                    <label for="">user_id</label>
                    <input type="text" class="form-control" name="user_id" value="">
                </div>
                
                 <div class="form-group">
                    <label for="">send_flg</label>
                    <input type="text" class="form-control" name="send_flg" value="">
                </div>
                
                 <div class="form-group">
                    <label for="">read_flg</label>
                    <input type="text" class="form-control" name="read_flg" value="">
                </div>
                
                 <div class="form-group">
                    <label for="">message</label>
                    <input type="text" class="form-control" name="message" value="">
                </div>
                
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>

         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html> 

@endsection