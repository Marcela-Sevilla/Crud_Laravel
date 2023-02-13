@extends('layouts.plantillabase')

@section('contenido')

<section class="card shadow-sm">
    <div class="card-header text-bg-primary">
        <span class="fs-4 fw-semibold">Lista de Compras</span>
    </div>
    <div class="card-body p-4">
        <a href="{{route('crear')}}" class="btn btn-outline-primary fs-5 shadow-sm">Agregar Artículo</a>
        
        <div class="table-responsive mt-3">
            <table class="table table-dark table-striped table-hover shadow-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Código</th>
                <th scope="col">Artículo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                    <tr>
                        <td>{{$articulo->id}}</td>
                        <td>{{$articulo->codigo}}</td>
                        <td>{{$articulo->descripcion}}</td>
                        <td>{{$articulo->contidad}}</td>
                        <td>{{$articulo->precio}}</td>
                        <td class="text-center">
                           <form action="/destroy/{{$articulo->id}}" method="POST">
                               @csrf
                               @method('DELETE')
                                <a href="/edit/{{$articulo->id}}" class="btn btn-warning shadow-sm fw-semibold">Editar</a>
                                <button class="btn btn-danger shadow-sm ms-2 fw-semibold">Eliminar</button>
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

