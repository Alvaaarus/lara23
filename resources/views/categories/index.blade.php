@extends('layouts.app')

@section('title','Listado de categorías')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Nueva categoría</a>
  </div>

  <h2>Botas de Fútbol</h2>
  @if($football->count())
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
      @foreach($football as $category)
        <div class="col">
          <div class="card h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $category->name }}</h5>
              <p class="card-text">{{ $category->description }}</p>
              <p class="mt-auto"><strong>Productos:</strong> {{ $category->products_count }}</p>
              <div class="mt-2 d-flex justify-content-between">
                <a href="{{ route('products.index') }}?category_id={{ $category->id }}&boot_type=turf" class="btn btn-sm btn-primary">Ver productos</a>
                <div>
                  <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Editar</a>
                  <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline ms-1" onsubmit="return confirm('¿Eliminar categoría?');" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p>No hay categorías de fútbol.</p>
  @endif

  <h2>Running</h2>
  @if($running->count())
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
      @foreach($running as $category)
        <div class="col">
          <div class="card h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $category->name }}</h5>
              <p class="card-text">{{ $category->description }}</p>
              <p class="mt-auto"><strong>Productos:</strong> {{ $category->products_count }}</p>
              <div class="mt-2 d-flex justify-content-between">
                <a href="{{ route('products.index') }}?category_id={{ $category->id }}&boot_type=trail" class="btn btn-sm btn-primary">Ver productos</a>
                <div>
                  <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Editar</a>
                  <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline ms-1" onsubmit="return confirm('¿Eliminar categoría?');" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p>No hay categorías de running.</p>
  @endif

  <h2>Otras Categorías</h2>
  @if($others->count())
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
      @foreach($others as $category)
        <div class="col">
          <div class="card h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $category->name }}</h5>
              <p class="card-text">{{ $category->description }}</p>
              <p class="mt-auto"><strong>Productos:</strong> {{ $category->products_count }}</p>
              <div class="mt-2 d-flex justify-content-between">
                <a href="{{ route('products.index') }}?category_id={{ $category->id }}" class="btn btn-sm btn-primary">Ver productos</a>
                <div>
                  <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Editar</a>
                  <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline ms-1" onsubmit="return confirm('¿Eliminar categoría?');" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p>No hay otras categorías.</p>
  @endif

  <hr>
  <h3>Tipos de Bota</h3>
  <div class="mb-3">
    @php
      $bootTypes = \App\Models\Product::select('boot_type')->whereNotNull('boot_type')->distinct()->pluck('boot_type');
    @endphp
    @if($bootTypes->count())
      <ul>
        @foreach($bootTypes as $type)
          <li><a href="{{ route('products.index') }}?boot_type={{ $type }}">{{ ucfirst($type) }}</a></li>
        @endforeach
      </ul>
    @else
      <p>No hay tipos de bota definidos.</p>
    @endif
  </div>

  <h3>Tipos de Suela</h3>
  <div class="mb-3">
    @php
      $soleTypes = \App\Models\Product::select('sole_type')->whereNotNull('sole_type')->distinct()->pluck('sole_type');
    @endphp
    @if($soleTypes->count())
      <ul>
        @foreach($soleTypes as $s)
          <li><a href="{{ route('products.index') }}?sole_type={{ $s }}">{{ ucfirst($s) }}</a></li>
        @endforeach
      </ul>
    @else
      <p>No hay tipos de suela definidos.</p>
    @endif
  </div>

@endsection
