@extends('layouts.plantillabase')

@section('contenido')

<section class="card shadow-sm">
    <div class="card-header text-bg-primary">
        <span class="fs-4 fw-semibold">Agregar Artículo a la Compra</span>
    </div>

    <div class="card-body p-4">
        <form action="">
            <div class="mb-3">
                <label for="codigo" class="form-label fs-5">Código:</label>
                <input type="text" class="form-control" id="codigo" placeholder="Ingrese el código del artículo">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label fs-5">Descripción Artículo:</label>
                <input type="text" class="form-control" id="descripcion" placeholder="Ingrese la descripción del artículo">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label fs-5">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio del artículo">
            </div>
        </form>
    </div>
</section>

@endsection