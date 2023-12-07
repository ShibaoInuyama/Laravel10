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
        <h1> Sport 3000 <h1>
    <nav>

<ul>
    <li>
        <a href="{{ route ('main.accueil') }}">Acceuil</a>
    </li>
    <li>
        <a href="{{ route ('main.cours') }}">Cours</a>
    </li>
    <li>
        <a href="{{ route ('main.tarifs') }}">Tarifs</a>
    </li>
    <li>
        <a href="{{ route ('main.contact') }}">Contact</a>
    </li>

</ul>
</nav>
<content>   </content>
    </header>
</body>
<footer>
        <a href="{{ route ('main.mmentions-legales') }}">Mentions Légales</a>
</footer>
</html>