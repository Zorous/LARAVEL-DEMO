@extends('layout')



@section('content')

{{-- Success message --}}
@if($message = Session::get('success'))
{{$message}}
@endif



    <h1>Voila tous notre produits : </h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Categorie</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <th scope="row">{{ $produit['id'] }}</th>
                    <td>{{ $produit['nom'] }}</td>
                    <td>{{ $produit['description'] }}</td>
                    <td>{{ $produit['prix'] }} DH</td>
                    <td>{{ $produit['category'] }}</td>
                    <td><img height="100px" width="200px" src={{"/uploads/".$produit['image']}} /></td>
                    <td>
                      <a href="{{ url('/produits/edit/'.$produit->id) }}"><button class="btn btn-warning mb-2"><i class="fa-solid fa-pen-to-square"></i></button></a>
                      <a href="{{ url('/produits/delete/'.$produit->id) }}"> <button class="btn btn-danger mb-2"><i class="fa-solid fa-trash"></i></button></a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="/produits/create"><button class="btn btn-warning">+ Ajouter un produits</button></a>

@endsection
