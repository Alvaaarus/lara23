@extends('layouts.app')

@section('title','Listado de productos')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Productos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo producto</a>
  </div>

  @if($products->count())
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      @foreach($products as $product)
        <div class="col">
          <div class="card h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $product->name }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ optional($product->category)->name }}</h6>
              <p class="card-text">{{ $product->description }}</p>
              <p class="mt-auto mb-2"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>

              <div class="d-flex justify-content-between">
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-secondary">Editar</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Eliminar producto?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-danger">Eliminar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-4">{{ $products->links() }}</div>
  @else
    <p>No hay productos aún.</p>
  @endif

@endsection
