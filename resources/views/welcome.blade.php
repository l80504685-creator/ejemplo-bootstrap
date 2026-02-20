@extends('layouts.app')

@section('content')
<div class="bg-primary text-white p-5 text-center">
    <h1>Bienvenido a Outlet Digital</h1>
    <p>Explora nuestras rebajas y productos nuevos</p> 
</div>
  <h2 class="mb-4 text-center">Electrónicos para uso personal</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Memoria Adata Micro SD')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/memoria micro.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Mouse')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/mouse.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Power Bank')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/powerbank.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Roku Control')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/roku control.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Reloj Smart Watch')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/watch.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Gowenic Camara Profesional')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/gowenic camara.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Cargador Tipo C a C')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/c a c.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Bluelander Planificador')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/bluelander planificador.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
  <h2 class="mb-4 text-center">Dispositivos móviles</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'iPhone Esim')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/APPLE ESIM.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

           

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'iPhone Esim Pro')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/apple esimm.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Moto Edge 60')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/moto edge 60.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
     

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Samsung Galaxy')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/SAMSUNG GALAXY.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Laptop Asus A16')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/laptop asus a16.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        
    </div>
</div>
  <h2 class="mb-4 text-center">Hogar y oficina</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Teléfono inalámbrico casa')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/teléfono inalambrico.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Bocina ALTO')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/ALTO bocina.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Cuory Smart TV')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/cuory smart tv.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Bluelander amplificador de sonido TV')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/barra sonido saiyin.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Casio calculadora científica (última generación)')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/casio calculadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
       
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Reloj Smart Watch')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/enmicadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Epson Ecotank impresora')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/epson ecotank impresora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Mini proyector portátil')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/mini proyector.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Epson proyector')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/epson proyecto.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Báscula digital')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/báscula.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Mini camara de seguridad')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/mini camara seguridad.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Trituradora de papel electrónica')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/trituradora papel.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Tapo Link cámara de seguridad')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/tapo link camara.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        
    </div>
</div>
  <h2 class="mb-4 text-center">Cuidado personal</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Afeitadora Hombre Braun Series 5')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/afeitadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Baumanómetro Digital bluetooth')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/baumanometro_bluetooth.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
       

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Baumanóemtro digital')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/baumanómetro.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Braun depiladora')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/braun depiladora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Depiladora portátil para mujer')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/depiladora mujer.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
         <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Depiladora Philips')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/depila philips.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Hilo dental inalámbrico')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/hilo dental inalambrico.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Kit de máscara de luz')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/mascar luz led.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Masajeador para manos')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/msaje_manos.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Masajeador de pies')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/msaje_pies.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Pistola masaje')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/pistola_masaje.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        
      
        
    </div>
</div>
  <h2 class="mb-4 text-center"> Belleza</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Rizadora de cabello')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/rizadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Revlon plancha para volumen de cabello')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/revlon volumen pelo.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Revlon secadora de cabello')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/revlon secadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Remington plancha para cabello')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/plancha_pelo.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        
    </div>
</div>
  <h2 class="mb-4 text-center"> Música</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Red Taylor Swift version vinyl')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/Red Taylor's version vinyl.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'The dark side of the moon vinyl')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/the dark side of the moon vinyl pink floyd.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Wutherin (Vinyl) Charli xcx')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/wutherin (Vinyl) charli xcx.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'The life of a showgirl vinyl')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/the life of a showgirl vinyl.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Alesis Set de batería')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/Alesis set batería.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Amplificador de guitarra')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/amplificador de guitarra.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Cuadro personalizado reproductor Spotify')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/cuadro personalizado reproductor spotify.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'DJ Control inalámbrico')
                @slot('contenido', '$748.00')
                @slot('imagen', asset('assets/img/Dj control.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
  <h2 class="mb-4 text-center"> Perfumes y cuidado de piel/cabello</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Nautica Eau de Toilette Voyage n-83')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/nautica eau de toilette voyage n-83.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Lancome la vie est belle mujer')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/lancome la vie est belle mujer.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Calvin Klein hombre')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/ck hombre.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Prada l homme para hombre')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/prada l homme para hombre.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'ARMAF Club de Nuit Urban Man Elixir by Armaf for Men.jpg')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/ARMAF Club de Nuit Urban Man Elixir by Armaf for Men.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Armaf Odyssey Homme White Edition EDP Spray Men')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/odyssey perfume.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Afnan Agua de Perfume EDP Supremacy Collector Edition para Hombres')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', '')
                @slot('contenido', '$249.00')
                @slot('imagen', asset(''))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
 

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Cera moldeadora para hombres.jpg')
                @slot('contenido', '$649.00')
                @slot('imagen', asset('assets/img/cera moldeadora vittorio forti.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Cerave gel limpiador.jpg')
                @slot('contenido', '$199.00')
                @slot('imagen', asset('assets/img/cerave.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>

        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Espuma hidratante limpiadora')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/espuma hidratante limpiadora.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Eucerin solar facial.jpg')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/eucerin solar facial.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Isdin protector solar hidratante')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/isdin protector sola.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
        <div class="col-md-3 mb-4">
            @component('_components.card')
                @slot('titulo', 'Isdin protector solar')
                @slot('contenido', '$249.00')
                @slot('imagen', asset('assets/img/isdin.jpg'))
                @slot('botonTexto', 'Ver más')
                @slot('botonLink', '#')
            @endcomponent
        </div>
    </div>
</div>
  <h2 class="mb-4 text-center"></h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
         
        </div>

        <div class="col-md-3 mb-4">
          

        <div class="col-md-3 mb-4">
     
        </div>
        <div class="col-md-3 mb-4">
           
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
    
        </div>

        <div class="col-md-3 mb-4">
         
        </div>

        <div class="col-md-3 mb-4">
       
        </div>
        <div class="col-md-3 mb-4">
         
    </div>
</div>



@endsection

