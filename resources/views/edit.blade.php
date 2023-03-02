@extends('layouts.plantillabase')

@section('contenido')

<section class="card shadow-sm rounded-5">
    <div class="card-header rounded-5 rounded-bottom-0">
        <h3 class="mb-0 ms-3"><i class="bi bi-pen-fill"></i> Editar Registro de Compra</h3>
    </div>

    <div class="card-body p-4">
        <form method="POST" action="/articulos/{{$articulo->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="codigo" class="form-label fs-5 fw-semibold">Código Prenda:</label>
                <input type="text" class="form-control shadow-sm" id="codigo" name="codigo" value="{{$articulo->codigo}}">
                @error('codigo')
                <p class="fw-semibold text-warning mt-2">
                    {{'El campo de Código es requerido y acepta minimo 8 carácteres!'}}
                </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label fs-5 fw-semibold">Descripción Prenda:</label>
                <input type="text" class="form-control shadow-sm" id="descripcion" name="descripcion" value="{{$articulo->descripcion}}">
                @error('descripcion')
                <p class="fw-semibold text-warning mt-2">
                    {{'El campo de Descripción es requerido!'}}
                </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label fs-5 fw-semibold">Cantidad de Prendas:</label>
                <input type="number" class="form-control shadow-sm" id="cantidad" name="cantidad" value="{{$articulo->contidad}}">
                @error('cantidad')
                <p class="fw-semibold text-warning mt-2">
                    {{'El campo de Cantidad es requerido y solo acepta números!'}}
                </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label fs-5 fw-semibold">Precio de la Prenda:</label>
                <input type="number" class="form-control shadow-sm" id="precio" name="precio" value="{{$articulo->precio}}">
                @error('precio')
                <p class="fw-semibold text-warning mt-2">
                    {{'El campo de Cantidad es requerido y solo acepta números!'}}
                </p>
                @enderror
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center pt-2">
                <a href="/" class="btn btn-outline-secondary fw-semibold border-2 me-md-2 shadow-sm" type="button"><i class="bi bi-box-arrow-left"></i> Cancelar</a>
                <button class="btn btn-primary fw-semibold shadow-sm" type="submit">Editar Prenda <i class="bi bi-pen-fill"></i></button>
            </div>
        </form>
    </div>
</section>

@endsection