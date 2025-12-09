@extends('layouts.app')

@section('title', 'Ajouter un Produit')

@section('content')
<h1 class="mb-4 animate__animated animate__fadeInDown">Ajouter un Produit</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" class="animate__animated animate__fadeInUp">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nom du produit</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prix (FCFA)</label>
        <input type="number" name="price" id="price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enregistrer</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Retour</a>
</form>
@endsection
