@extends('layouts.plantillabase')

@section('contenido')

<div class="pagetitle">
    <h1><i class="bi bi-clipboard-data-fill"></i> Registro de Compras</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Registro de Compras</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row justify-content-center">

        <!-- Left side columns -->
        <div class="col-lg-9">
            <div class="row">

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Ventas Recientes <span>| Hoy</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Artículo</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio Unidad</th>
                                        <th scope="col">Precio Total</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articulos as $articulo)
                                    <tr>
                                        <td>{{$articulo->codigo}}</td>
                                        <td>{{$articulo->descripcion}}</td>
                                        <td>{{$articulo->contidad}}</td>
                                        <td>${{$articulo->precio}}</td>
                                        <td>${{$articulo->precio * $articulo->contidad}}</td>
                                        <td class="text-center">
                                            <form action="/destroy/{{$articulo->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="/edit/{{$articulo->id}}" class="btn btn-sm btn-primary shadow-sm fw-semibold">Editar <i class="bi bi-pen-fill"></i></a>
                                                <button class="btn btn-sm btn-danger shadow-sm ms-2 fw-semibold">Eliminar <i class="bi bi-trash3-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Recent Sales -->

            </div><!-- End Right side columns -->

        </div>
</section>

@endsection