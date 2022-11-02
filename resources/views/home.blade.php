@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Aqui va la parte del Dashboard -->
                    <div class="jumbotron">
                        <h1 class="display-4">Un Click Por Mi Planeta</h1>
                        <p class="lead">Es una iniciativa que busca reducir el consumo global de energía causada por el almacenamiento de correos, mediante una limpieza de las cuentas electrónicas en 2022</p>
                        <hr class="my-4">
                        <ol>
                            <li>Ingrese en sus cuentas de correo electrónico, servicio de nube o alojamiento de fotos (si tiene más de una puede agregar las hasta 5 cuentas en este formulario).</li>
                            <li>Elimine los correos y archivos no deseados o que ya no use de sus diferentes servicios (Incluyendo bandeja de eliminados o papeleras de reciclaje)./li>
                            <li>Registre su aporte digital</li>
                            <li>Genere su Certificado</li>
                        </ol>
                        
                    </div> 

                    <hr class="my-4">


                    <h3>Hasta el momento has eliminado un total de: {{1000}} Mb</h3>
                    <p>Energía Ahorrada:  {{(1000/1024)* 6.536,2}} KWh</p>
                    <p>Emisiones CO2: {{(1000/1024)* 831/1000000}} ppm</p>
                    <p>Ahorro en dólares: $ {{(1000/1024)* 0.1245398,2}}</p>
                    <p>Equivale a tener encendidos: {{(1000/1024)* 0.145,2 }} Bombillas led</p>

                    <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Generar Certificado</a>
                        </p>
                    
                    <!-- {{ __('You are logged in!') }} -->
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
