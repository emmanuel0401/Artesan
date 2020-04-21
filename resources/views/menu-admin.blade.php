<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/home.css">
        </head>
    <header>
        <img src="images/artesan2.png" alt="compras" width="120px" height="105px">
    <h1> ARTESAN</h1>
    </header>
    <body>
    <div class="menu">
        <ul>
            <li><a href="{{ ('/') }}"> INICIO </a></li>
            <li> <a href="{{'/Artesanias'}}"> ARTESANÍAS </a></li>
            <li> <a href="{{'/usuarios'}}"> USUARIOS </a></li>
            <li> <a href="{{'/register'}}"> REGISTRARSE </a></li>
            <li> <a href="{{'/stock'}}"> STOCK </a></li>
            <li> <a href="{{'/procedure'}}"> PROCEDIMIENTOS AL </a></li>
            <li> <a href="{{'/respaldo'}}"> DISPARADOR </a></li>
            <!--<li> <a href="{{'/login'}}"> INICIAR SESIÓN </a></li>-->
            
         </ul>   
     </div>
     <img src="images/seguridad.jpg" height="600px" width="1350px">
    </body>
</html>