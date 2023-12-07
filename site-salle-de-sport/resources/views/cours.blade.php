@extends('base')
@section('title', 'Cours')

 
    @section('content')
    <title>Tableau Simple</title>
</head>
<body>
    <table class="simple-table">
        <thead>
            <tr>
                <th>Cours</th>
                <th>Jours</th>
                <th>Heure</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Zumba</td>
                <td>Lundi</td>
                <td>19h à 21h</td>
            </tr>
            <tr>
                <td>Pilates</td>
                <td>Mardi</td>
                <td>19h30 à 21h30</td>
            </tr>
            <tr>
                <td>Boxe anglaise</td>
                <td>Mercredi</td>
                <td>20h à 22h</td>
            </tr>
            <tr>
                <td>Hiit</td>
                <td>Jeudi</td>
                <td>20h à 22h</td>
            </tr>
            <tr>
                <td>Yoga</td>
                <td>Vendredi</td>
                <td>9h à 11h</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
@endsection