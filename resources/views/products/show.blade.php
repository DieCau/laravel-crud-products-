@extends('layout/app')
@section('title', 'Agregar Producto')
{{-- Details Product --}}
@section('content')
    <div class="container mt-4">


        <div class="row">
            <div class="col-12">
                <h1>Detalle del Producto</h1>
                <hr>
                <div class="mb-3">
                    <b>ID: </b>{{ $product->id }}
                </div>
                <div class="mb-3">
                    <b>Nombre: </b>{{ $product->name }}
                </div>
                <div class="mb-3">
                    <b>Descripcion: </b>{{ $product->description }}
                </div>
                <div class="mb-3">
                    <b>Creado: </b>{{ $product->created_at->format('d-m-Y H:i:s') }}
                </div>
                <div class="mb-3">
                    <b>Actualizado: </b>{{ $product->updated_at->format('d-m-Y H:i:s') }}
                </div>
                <a href="{{ route('index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i>
                    Atras</a>
            </div>
        </div>

    </div>
@endsection
