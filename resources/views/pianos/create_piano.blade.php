@extends('layouts.template')

@section('content')
    <h1>Ajoutez votre piano</h1>

    <form class ="formulaire" action="{{route('store')}}" method="POST">  
        @csrf   <!---------------------- A METTRE DANS CHAQUE FORMULAIRE POUR EVITER LES FAILLES XSS  ----------------------------------->
        <div class="form-example">
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-example">
            <label for="text">Marque : </label>
            <input type="text" name="brand" id="brand" required>
        </div>
        <div class="form-example">
            <label for="name">Année de fabrication : </label>
            <input type="number" name="fabrication" id="fabrication" required>
        </div>
        <div class="form-example">
            <label for="name">Description : </label>
            <input type="text" name="description" id="description" required>
        </div><div class="form-example">
            <label for="name">Prix : </label>
            <input type="number" name="price" id="price" required>
        </div>

        <div class="form-example">
            <input type="submit" value="Ajouter">
        </div>
    </form>

@endsection