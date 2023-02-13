@extends('layouts.plantillabase')

@section('contenido')

<section class="card shadow-sm">
    <div class="card-header text-bg-primary">
        <span class="fs-4 fw-semibold">Editar Artículos</span>
    </div>

    <div class="card-body p-4">
        <form method="POST" action="">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="codigo" class="form-label fs-5">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{$articulo->codigo}}" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label fs-5">Descripción Artículo:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$articulo->descripcion}}" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label fs-5">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$articulo->contidad}}" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{$articulo->precio}}" required>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/articulos" class="btn btn-secondary me-md-2" type="button">Cancelar</a>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>

@endsection