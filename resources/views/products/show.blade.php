@extends('layouts.app')

@section('title', 'Détails du Produit')

@section('content')
<h1 class="mb-4 animate__animated animate__fadeInDown">Détails du Produit</h1>

<div class="card animate__animated animate__fadeInUp">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text"><strong>Prix :</strong> {{ number_format($product->price, 2, ',', ' ') }} FCFA</p>
        <p class="card-text"><strong>ID :</strong> {{ $product->id }}</p>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Modifier</a>
        <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Retour</a>
    </div>
</div>
@endsection
