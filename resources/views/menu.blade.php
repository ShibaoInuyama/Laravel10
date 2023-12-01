@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('base')
@section('title', 'Menu')
@section('content')
    <header>
      <!-- todo -->
    </header>
    <section>
      <h2>Menu</h2>
@foreach ($categories as $categorie)
      <div>
        <h3>{{ $categorie }}</h3>
        <ul class="plats">
          @for ($i = 0; $i< 3; $i++)
          <li>
            <h4>blabla</h4>
            <img src="/image/Delicieusepizza.jpg" alt="Delicieusepizza" />
            <h4>Delicieuse pizza</h4>
            <span class="prix">9,99 eur</span>
            <a href="pagepizza1.html"> Page de la pizza</a>
          </li>
          @endfor
        </ul>
      </div>
@endforeach

    </section>
@endsection
    <footer>
      <!-- todo -->
    </footer>
  </body>
</html>