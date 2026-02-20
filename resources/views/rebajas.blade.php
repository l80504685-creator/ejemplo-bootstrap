@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Productos en Rebaja</h2>
    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/eco show.jpg') }}" class="card-img-top" alt="Amazon Echo Pop">
                <div class="card-body">
                    <h5 class="card-title">Amazon Eco Show</h5>
                    <p class="card-text text-success fw-bold">$549.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/xiaomi audi.jpg') }}" class="card-img-top" alt="Xiaomi Audífonos">
                <div class="card-body">
                    <h5 class="card-title">Xiaomi Audífonos</h5>
                    <p class="card-text text-success fw-bold">$149.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/cargador.jpg') }}" class="card-img-top" alt="UGREEN Cargador">
                <div class="card-body">
                    <h5 class="card-title">UGREEN Cargador</h5>
                    <p class="card-text text-success fw-bold">$199.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/bocina jbl.jpg') }}" class="card-img-top" alt="JBL Go 4">
                <div class="card-body">
                    <h5 class="card-title">JBL Go 4</h5>
                    <p class="card-text text-success fw-bold">$699.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">

    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/control.jpg') }}" class="card-img-top" alt="Amazon Echo Pop">
                <div class="card-body">
                    <h5 class="card-title">Control Fire TV Stick</h5>
                    <p class="card-text text-success fw-bold">$549.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/deco wifi.jpg') }}" class="card-img-top" alt="Xiaomi Audífonos">
                <div class="card-body">
                    <h5 class="card-title">Deco Wi-Fi</h5>
                    <p class="card-text text-success fw-bold">$149.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/airpod.jpg') }}" class="card-img-top" alt="UGREEN Cargador">
                <div class="card-body">
                    <h5 class="card-title">AirPods iPhone</h5>
                    <p class="card-text text-success fw-bold">$199.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/alexa.jpg') }}" class="card-img-top" alt="JBL Go 4">
                <div class="card-body">
                    <h5 class="card-title">Home Alexa</h5>
                    <p class="card-text text-success fw-bold">$699.00 (Oferta)</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
