@extends('layouts.plantillabase')

@section('contenido')

<section class="card shadow-sm rounded-5">
    <div class="card-header rounded-5 rounded-bottom-0">
        <h3 class="mb-0 ms-3"><i class="bi bi-basket2-fill"></i> Agregar Registro de Compra</h3>
    </div>

    <div class="card-body p-4">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label fs-5 fw-semibold">Código Prenda:</label>
                <input type="text" class="form-control shadow-sm" id="codigo" name="codigo" placeholder="Ingrese el código de la prenda">
                @error('codigo')
                <p class="fw-semibold text-danger mt-2">
                    {{'El campo de Código es requerido!'}}
                </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label fs-5 fw-semibold">Descripción Prenda:</label>
                <input type="text" class="form-control shadow-sm" id="descripcion" name="descripcion" placeholder="Ingrese la descripción de la prenda">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label fs-5 fw-semibold">Cantidad de Prendas:</label>
                <input type="number" class="form-control shadow-sm" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad de prendas">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label fs-5 fw-semibold">Precio de la Prenda:</label>
                <input type="number" class="form-control shadow-sm" id="precio" name="precio" placeholder="Ingrese el precio de la prenda">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center pt-2">
                <a href="/" class="btn btn-outline-secondary fw-semibold border-2 me-md-2 shadow-sm" type="button"><i class="bi bi-box-arrow-left"></i> Cancelar</a>
                <button class="btn btn-primary fw-semibold shadow-sm" type="submit">Registrar Prenda <i class="bi bi-send"></i></button>
            </div>
        </form>
    </div>
</section>

@endsection