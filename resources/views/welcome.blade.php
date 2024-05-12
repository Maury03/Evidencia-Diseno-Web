@extends('layouts.app') 
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="welcome">
                <div class="card">
                    <div class="card-header">
                        <h2>Bienvenido<h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text details">
                            En esta aplicación web es posible registrar calificaciones como profesor asi
                            como ver calificaciones como estudiante. Las páginas para realizar esto están protegidas
                            hasta se realize la autenticación. Inicia sesión para revisar tus calificaciones o registra una nueva cuenta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
