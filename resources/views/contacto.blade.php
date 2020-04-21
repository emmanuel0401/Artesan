<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Contacto</title>
         <link rel="stylesheet" href="CSS/contacto.css">
	</head>
<header>
	<img src="images/artesan2.png" alt="compras" width="120px" height="105px">
    <h1> ARTESAN  </h1>
</header>
<body>
	<div class="menu">
        <ul>
            <li><a href="{{ ('/') }}"> INICIO </a>
            <li> <a href="{{'/producto'}}"> CATÁLOGO </a>
            
            <li> <a href="{{'/quienes-somos'}}">¿QUIÉNES SOMOS? </a>
            <li> <a href="{{'/contacto'}}"> CONTACTO </a>
            <li> <a href="{{'/register'}}"> REGISTRARME </a>
            <li> <a href="{{'/login'}}"> INICIAR SESIÓN </a>
        </ul>
    </div>
    @extends('layouts.app')
@section('content')

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="seccion-contacto my-5">
                <div class="card">
                  <div class="card-header">
                    
                  </div>
                  <div class="card-body">
                    @if (session('estado'))
                        <div class="alert alert-success">
                            {{ session('estado') }}
                        </div>
                    @endif
                    <form method="POST" action="/enviar" class="contact-form {{ (Session::get('errors')) ? 'was-validated' : '' }}"  role="form" id="contact-form" class="">
                    @csrf
                        <div class="messages"></div> {{-- mensajes de error --}}

                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Tu nombre </label>
                                        <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Por favor ingresa tu nobre" required="required" data-error="El nombre es requerido.">
                                        
                                            @if($errors->has('nombre'))
                                                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                                            @endif

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input id="email" type="text" name="email" class="form-control" placeholder="Por favor ingresa tu email" required="required" data-error="Email es requerido.">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mensaje">Mensaje *</label>
                                        <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Tu mensaje" rows="4" required="required" data-error="Por favor incluye un mensaje."></textarea>
                                        @if($errors->has('mensaje'))
                                            <div class="invalid-feedback">{{ $errors->first('mensaje') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Enviar tu mensaje">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <p class="text-muted">
                                        <strong>*</strong> Campos requeridos.</p>
                                </div>
                            </div>
                        </div>
                    </form> <!-- fin - .contact-form -->
                </div> <!-- fin del componente card -->
            </section> <!-- fin - .seccion-contacto ->
        </div>
    </div>
</div>---->
<iframe text-align:center width="1050" height="400" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/4fa675bf-0905-463f-b4f4-68d705decf37"></iframe>

<footer>
        <div class="redsocial">
            <p> Conoce nuestras redes sociales </p>
            <ul>
                <li><a href="https://twitter.com/?lang=es" target="_blank"> <img src=https://lh6.googleusercontent.com/-vao9pzZoGtk/T6VYC4d1YMI/AAAAAAAAA0U/4rdP2chJido/s48/twitter48.png" width=35 height=35 alt="Síguenos en Twitter" /></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"> <img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=35 height=35  /></a></li>
                <li><a href="https://www.instagram.com/?hl=es-la" target="_blank"> <img alt="Siguenos en Blogger" src="https://lh3.googleusercontent.com/-D-erW-8vZFo/UIqE3H6oUuI/AAAAAAAABgE/4kh346Lwaxk/s48/instagram48.png" width=35 height=35  /></a></li>
                <li><a href="https://www.youtube.com/" target="_blank"><img alt="Siguenos en YouTube" src="https://lh6.googleusercontent.com/-Atgpy-x_OwI/T6mYkA18hYI/AAAAAAAAA1U/qksUJ5uBq3c/s48/youtube48.png" width=35 height=35  /></a></li>
            </ul>
        </div>
        <p> Derechos reservados Artesan SA de CV</p>
</footer>
    </html>
@endsection
