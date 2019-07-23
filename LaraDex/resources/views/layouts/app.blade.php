<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>LaraDex - @yield('title') </title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="/" class="navbar-brand">Laradex</a>
        <a href="{{route('trainers.index')}}" class="navbar-brand">Entrenadores</a>
        <a href="{{route('trainers.create')}}" class="navbar-brand">Crear entrenador</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>