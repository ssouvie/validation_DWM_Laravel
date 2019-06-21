@extends('layouts.template')

@section('content')
    <h1>Page d'édition des pianos</h1>

    <form class="formulaire" action="{{route('update', $piano->id) }}" method="POST">  <!---------------------- Formulaire édition piano  ------------------------------->
        @csrf   <!---------------------- A METTRE DANS CHAQUE FORMULAIRE POUR EVITER LES FAILLES XSS  ----------------------------------->
        <div class="form-example">
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name" placeholder="Nom du piano" value="{{ $piano->name}}" required>
        </div>
        <div class="form-example">
            <label for="text">Marque : </label>
            <input type="text" name="brand" id="brand" placeholder="Marque du piano" value="{{ $piano->brand}}" required>
        </div>
        <div class="form-example">
            <label for="text">Année de fabrication : </label>
            <input type="number" name="fabrication" id="fabrication" placeholder="Année de fabrication" value="{{ $piano->fabrication}}" required>
        </div>
        <div class="form-example">
            <label for="text">Description : </label>
            <input type="text" name="description" id="description" placeholder="description" value="{{ $piano->description}}" required>
        </div> <div class="form-example">
            <label for="text">Prix : </label>
            <input type="number" name="price" id="price" placeholder="price" value="{{ $piano->price}}" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Modifier!">
        </div>
    </form>
@endsection