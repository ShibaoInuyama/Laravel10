<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.Sport3000') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1> <h1>
    <nav>

<ul>
    <li>
        <a href="{{ route ('main.home') }}">Acceuil</a>
    </li>
    <li>
        <a href="{{ route ('main.menu') }}">Menu</a>
    </li>
</ul>
</nav>
    </header>
</body>
</html>