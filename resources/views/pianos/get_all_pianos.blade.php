<!-------------------------------  Récupérer et afficher les infos des pianos  dans la DB  ------------------------------------------------->
@extends('layouts.template')

@section('content')
    <h1>Liste des pianos</h1>
    <br><br>

<table class="formulaire">                                    
    <thead>
  <tr> 
    <th>Nom </th>
    <th>Marque </th> 
    <th>Année de fabrication </th>
    <th>Description </th>
    <th>Prix</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($pianos as $piano)                 
    <tr>
        <td>{{ $piano->name }}</td>            
        <td>{{ $piano->brand }}</td>          
        <td>{{ $piano->fabrication}}</td>      
        <td>{{ $piano->description }}</td>      
        <td>{{ $piano->price }}</td>  

        <td><button><a href="{{ route('edit', $piano->id) }}"> Modifier</a></button></td> 
        <td>
            <form method="POST" action="{{ route('delete', $piano->id) }}">
            @csrf <!-------------------------------------------------->
            <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection