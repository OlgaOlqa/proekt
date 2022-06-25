<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel="stylesheet" href="{{ asset('css/forma.css') }}">
</head>

<body>
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1 style="color: #877C73">Создать аккаунт</h1>
        </div>
        <div class="form-content">
            <form action="{{ route('register.submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Логин</label>
                    <input type="text" id="name" name="name"/>
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email"/>
                    @error('email')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password"/>
                    @error('password')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Повторите пароль</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"/>
                    @error('password_confirmation')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <a style="text-decoration:none;font-size: 15px;color: #877C73" href="{{route("login")}}">Войти</a>
                <div class="form-group">
                    <button style="color: #E6F8F9;margin-top: 15px" type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
