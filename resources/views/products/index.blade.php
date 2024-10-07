@extends('layout/app')

@section('title', 'Productos - Laravel v11')
@section('content')

    <div class="container mt-4">
        <h1>Lista de Productos</h1>

        @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
        @endif

        <div class="text-end">
            <a href="{{ route('create') }}" class="btn btn-outline-primary"><i class="bi bi-plus-circle"></i>
                Agregar</a>
        </div>


        <table class="table table-sm table-hover text-center">
            <thead>
                <tr class="align-middle text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr class="align-middle">
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td class="text-end">
                            <div class="d-flex gap-3 justify-content-end">
                                <a href="{{ route('show', $product->id) }}" class="btn btn-outline-primary"><i
                                        class="bi bi-list-task"></i> Detalle</a>
                                <a href="{{ route('edit', $product->id) }}" class="btn btn-outline-warning"><i
                                        class="bi bi-pencil-square"></i> Editar</a>
                                <form action="{{ route('destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('¿Esta seguro eliminar el producto?')"><i class="bi bi-trash"></i>
                                        Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
