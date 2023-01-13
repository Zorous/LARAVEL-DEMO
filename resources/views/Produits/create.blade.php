@extends('layout')


@section('content')


{{-- Displaying validation errors --}}
@if($errors->any())

<ul>
    @foreach($errors->all() as $error)
<li>{{ $error }}</li>
    @endforeach
</ul>

@endif

<form method="POST" action="/produits/store" enctype="multipart/form-data">
 @csrf
{{--  {{ method_field('PUT') }} --}}

    <div class="form-group">
      <label for="nom">Nom : </label>
      <input type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Nom de produits">
    </div>
    <div class="form-group">
      <label for="description">Description : </label>
      <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Description...">
    </div>
    <div class="form-group">
      <label for="prix">Prix : </label>
      <input type="text" name="prix" class="form-control" id="prix" aria-describedby="emailHelp" placeholder="999$">
    </div>
     <div class="form-group">
      <label for="image">Category : </label>
      <select name="category">
        <option value="Smartphones">Smartphones</option>
        <option value="Laptops">Laptops</option>
      </select>
    </div>

    <div class="form-group">
      <label for="image">Image : </label>
      <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">+ Ajouter</button>
  </form>

@endsection
