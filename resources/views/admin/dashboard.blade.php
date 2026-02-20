@extends('layouts.app')

@section('content')
<h2>DASHBOARD (ADMINISTRADOR)</h2>

<h4>Inventario</h4>
<form>
    <input type="text" placeholder="Nombre del producto" class="form-control mb-2">
    <input type="number" placeholder="Cantidad" class="form-control mb-2">
    <input type="text" placeholder="Marca" class="form-control mb-2">
    <button class="btn btn-success">Guardar cambios</button>
</form>

<h4 class="mt-4">Productos disponibles</h4>
<div class="row">
    <div class="col-md-4 mb-4">
        @component('_components.card')
                @slot('titulo', 'Cargador Tipo C a C')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/c a c.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
    </div>
    <div class="col-md-4 mb-4">
         @component('_components.card')
                @slot('titulo', 'Reloj Smart Watch')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/enmicadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
    </div>
    <div class="col-md-4 mb-4">
          @component('_components.card')
                @slot('titulo', 'Báscula digital')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/báscula.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
    </div>
    <div class="col-md-4 mb-4">
        @component('_components.card')
                @slot('titulo', 'Mini proyector portátil')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/mini proyector.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
    </div>
    <div class="col-md-4 mb-4">
        @component('_components.card')
            @slot('titulo', 'Gowenic Camara Profesional')
            @slot('contenido', '$199.00')
            @slot('imagen', asset('assets/img/gowenic camara.jpg'))
            @slot('botonTexto', 'Ver más')
            @slot('botonLink', '#')
        @endcomponent
    </div>
    <div class="col-md-4 mb-4">
        @component('_components.card')
            @slot('titulo', 'Roku Control')
            @slot('contenido', '$748.00')
            @slot('imagen', asset('assets/img/roku control.jpg'))
            @slot('botonTexto', 'Ver más')
            @slot('botonLink', '#')
        @endcomponent
        </div>
    </div>
 
   

   
@endsection