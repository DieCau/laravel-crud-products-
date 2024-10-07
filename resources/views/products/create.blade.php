@extends('layout/app')
@section('title', 'Agregar Producto')
@section('content')
    <div class="container mt-4">

        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <h1>Agregar Nuevo Producto</h1>
                <hr>
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Ingrese Nombre del Producto" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="description" id="description" rows="8"
                            placeholder="Ingrese Descripcion del Producto">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price"
                            placeholder="Ingrese Precio del Producto" value="{{ old('price') }}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary"><i class="bi bi-floppy"></i> Guardar</button>
                    <a href="{{ route('index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i>
                        Atras</a>
                </form>
            </div>
        </div>

    </div>
@endsection
