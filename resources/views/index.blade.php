@extends('layouts.plantillabase')

@section('contenido')

<section class="card shadow-sm rounded-5">
    <div class="card-header rounded-5 rounded-bottom-0">
        <h3 class="mb-0 ms-3"><i class="bi bi-clipboard-data-fill"></i> Registro de Compras</h3>
    </div>
    <div class="card-body p-4 p-lg-5">

        <div class="table-responsive">
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
                                <a href="/edit/{{$articulo->id}}" class="btn btn-primary shadow-sm fw-semibold">Editar <i class="bi bi-pen-fill"></i></a>
                                <button class="btn btn-danger shadow-sm ms-2 fw-semibold">Eliminar <i class="bi bi-trash3-fill"></i></button>
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>

        <a href="{{route('crear')}}" class="btn btn-outline-warning fs-5 shadow-sm border-2 mt-2 fw-semibold">Agregar Artículo <i class="bi bi-basket2-fill"></i></a>

    </div>
</section>

@endsection

