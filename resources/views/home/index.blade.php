<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <H1>this page is home</H1>
@auth
    <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username}} estas autentificado</p>
    <a href="/logout">Logout</a>
   


@endauth
@guest
    para ver el contino inicia sesion- <a href="/login">Iniciar sesion</a>
@endguest
</body>
</html>