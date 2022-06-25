<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Войти</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel="stylesheet" href="{{ asset('css/forma.css') }}">
</head>

<body>
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1>Войти в аккаунт</h1>
        </div>
        <div class="form-content">
            <form action="{{ route('login.submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Логин</label>
                    <input type="text" id="name" name="name">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <br>
                <div class="form-group">
                    <button type="submit">Войти</button>
                </div>
            </form>
        </div>
    </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

<script src="{{ asset('js/forma.js') }}"></script>


</body>
</html>
