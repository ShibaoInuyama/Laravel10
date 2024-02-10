@extends('base')

@section('title', 'Admin - Réservation - Edit')

@section('content')
<section>
    <h1>Admin-Réservation-Edit</h1>
</section>
      {{--  <div>
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
        </div>
    --}}
        <form action="{{ route('admin.reservation.update', ['id'=>$reservation->id]) }}" method="POST">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" min="3" max="50" value="{{ old('nom', $reservation->nom) }}"
                    required>
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="couverts">Nombre de couverts</label>
                <input type="number" name="couverts" id="couverts" min="1" max="16"
                    value="{{ old('couverts', $reservation->couverts) }}" required>
                @error('couverts')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="heure">Heure</label>
                <select name="heure" id="heure" required>
                    <option value=""></option>
                    @foreach ($heures as $heure)
                        <option value="{{ $heure }}"{{old('heure', $reservation->heure)== $heure. ':00' ? 'selected': '' }}> {{ $heure }}</option>
                    @endforeach
                </select>
                @error('heure')
                    <div class="invalid-feedback"->{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="jour">Jour</label>
                <input type="date" name="jour" id="jour" min="{{ date ('Y-m-d') }}" value="{{ old('jour', $reservation->jour) }}" required>
                @error('jour')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="telephone">Numéro de téléphone</label>
                <input type="phone" name="telephone" id="telephone" value="{{ old('telephone', $reservation->telephone) }}" placeholder="exemple : 0612345678" required>
                @error('telephone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="commentaires">Commentaires</label>
                <textarea name="commentaires" id="commentaires" cols="30" rows="10">{{ old('commentaires', $reservation->commentaires) }}</textarea>
            </div>
            @error('commentaires')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div>
                <button type="submit">Réserver</button>
            </div>
        </form>
    </section>
@endsection
