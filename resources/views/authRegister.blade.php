<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/register" method="post">
@csrf
<input type="text" name="username">
<input type="email" name="email">
<input type="password" name="password">
<input type="password" name="password_confirmation">
<input type="submit" value="registrarse">


    </form>
</body>
</html>