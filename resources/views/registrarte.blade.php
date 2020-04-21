<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Formulario </title>
        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" href="CSS/registro.css">
        <link rel="stylesheet" href="CSS/home.css">
        <!-- Styles -->

    </head>
    <header>
        <img src="images/artesanos.png" alt="compras" width="110px" height="110px">
    <h1> ARTESANOS </h1>
    </header>
    <body>
    <div class="menu">
        <ul>
            <li><a href="{{ ('/') }}"> INICIO </a></li>
            <li> <a href="{{'/productos vendidos'}}"> PRODUCTOS VENDIDOS </a></li>
            <li> <a href="{{'/create'}}"> REGISTRARSE </a></li>
            <li> <a href="{{'/registrarte'}}"> REGISTRARSE </a></li>
            <li> <a href="{{'/quienes-somos'}}">¿QUIENES SOMOS? </a></li>
            <li> <a href="{{'/contacto'}}"> CONTACTO </a></li>
         </ul>
     </div>
<div class="contenido">
    <div class="formulario">
            <h2> Ingresa tus datos </h2>
            <div>
                <form class="form_registro" action="">
                    <input class="input" type="text" size="30" placeholder="&#128100; Nombre" name="nombre" required autofocus>
                    <input class="input" type="text" size="30" placeholder="&#128100; Apellidos" name="Apellidos" required autofocus>
                    <input class="input" type="Dirección" size="30" placeholder=" &#127968; Dirección" name="direccion" required>
                    <input class="input" type="Telefono" size="30" placeholder="&#128222; Telefono" name="telefono" required>
                    <input class="input" type="email" size="30" placeholder="&#9993; Correo Electronico" name="correo" required>
                    <input class="input" type="Contraseña" size="30" placeholder="&#128273; Contraseña" name="contraseña" required>
                    <br><button class="submit-btn"> Registrar </button>
                    <p> Si no tienes una cuenta </p>
                </form>
        </div>
    </div>
</div>
</body>
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