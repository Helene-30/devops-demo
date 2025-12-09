@extends('layouts.app')

@section('title', 'Liste des Produits')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="animate__animated animate__fadeInLeft">Liste des Produits</h1>
    <div>
        <a href="{{ route('products.create') }}" class="btn btn-success me-2 animate__animated animate__fadeInUp">
            <i class="fas fa-plus"></i> Ajouter
        </a>
        <a href="{{ route('products.pdf') }}" class="btn btn-primary animate__animated animate__fadeInUp">
            <i class="fas fa-file-pdf"></i> Export PDF
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success animate__animated animate__fadeIn">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive animate__animated animate__fadeInUp">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="animate__animated animate__fadeIn">
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, 2, ',', ' ') }} FCFA</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-info me-1">
                        <i class="fas fa-eye"></i> Voir
                    </a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning me-1">
                        <i class="fas fa-edit"></i> Modifier
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
