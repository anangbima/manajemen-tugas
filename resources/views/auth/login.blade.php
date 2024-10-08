<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>Login</H1>
    <form action="{{ route('proses-login') }}" method="post">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>