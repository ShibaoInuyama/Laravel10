@extends('base')
@section('title', 'Tarifs')
<h2> Tarifs</h2>
    @section('content')

    <div class="pricing-table">
        <div class="plan">
            <h2>Adhésion anuelle à l'association</h2>
            <p class="price">15€</p>
        
        </div>

        <div class="plan">
            <h2>Par séance</h2>
            <p class="price">10€</p>
 
        </div>

        <div class="plan">
            <h2>carnet de 10 séances</h2>
            <p class="price">90€</p>
        </div>

        <div class="plan">
            <h2>cabonnement mensuel illimité sans cours</h2>
            <p class="price">30€</p>
        </div>

        <div class="plan">
            <h2>abonnement mensuel illimité avec cours</h2>
            <p class="price">60€</p>
        </div>
    </div>
</body>
</html>

    @endsection