@extends('base')
@section('title', 'Contact')
    @section('content')
    <p>téléphone : le 06 00 00 00 00 </p>
     <p>adresse : 5 Bd Louis XIV, 59800 Lille</p>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.915508575201!2d3.0678293762326256!3d50.62868637451482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1701959975967!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form action="#" method="post">

            <label for="message">Contactez-nous ! :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>


        @endsection