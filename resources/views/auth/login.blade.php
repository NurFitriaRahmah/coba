<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login User</title>
</head>
<body>
    <form method="POST" action="{{ url('login')}}">
        @csrf
        <label for="email">Masukkan Email :</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Masukkan Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" id="submit" name="submit">Login</button>
    </form>
</body>
</html>