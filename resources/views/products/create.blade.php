@extends('layouts.app')

@section('title','Crear producto')

@section('content')
  <h1>Crear producto</h1>

  <form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nombre</label>
      <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Descripción corta</label>
      <input type="text" name="description" class="form-control" value="{{ old('description') }}">
      @error('description') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Descripción larga</label>
      <textarea name="descriptionLong" class="form-control">{{ old('descriptionLong') }}</textarea>
      @error('descriptionLong') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Precio</label>
      <input type="text" name="price" class="form-control" value="{{ old('price') }}">
      @error('price') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Categoría</label>
      <select name="category_id" class="form-select">
        <option value="">-- Sin categoría --</option>
        @foreach($categories as $cat)
          <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
        @endforeach
      </select>
      @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Tipo de bota</label>
      <select name="boot_type" class="form-select">
        <option value="">-- Sin especificar --</option>
        <option value="turf" {{ old('boot_type')=='turf' ? 'selected' : '' }}>Turf</option>
        <option value="tf" {{ old('boot_type')=='tf' ? 'selected' : '' }}>TF</option>
        <option value="trail" {{ old('boot_type')=='trail' ? 'selected' : '' }}>Trail</option>
        <option value="general" {{ old('boot_type')=='general' ? 'selected' : '' }}>General</option>
      </select>
      @error('boot_type') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Tipo de suela</label>
      <select name="sole_type" class="form-select">
        <option value="">-- Sin especificar --</option>
        <option value="studs" {{ old('sole_type')=='studs' ? 'selected' : '' }}>Studs</option>
        <option value="speed" {{ old('sole_type')=='speed' ? 'selected' : '' }}>Speed</option>
        <option value="grip" {{ old('sole_type')=='grip' ? 'selected' : '' }}>Grip</option>
        <option value="flat" {{ old('sole_type')=='flat' ? 'selected' : '' }}>Flat</option>
      </select>
      @error('sole_type') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
  </form>

@endsection
