@extends('layouts.app')

@section('title','Editar categoría')

@section('content')
  <h1>Editar categoría</h1>

  <form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Nombre</label>
      <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
      @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Descripción</label>
      <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
      @error('description') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
  </form>

@endsection
