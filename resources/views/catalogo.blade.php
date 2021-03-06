<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comercio</title>
        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" href="CSS/catalogo.css">
        <!-- Styles -->
    </head>
    <header>
        <img src="images/Artesan2.png" alt="compras" width="120px" height="105px">
    <h1> ARTESAN </h1>
    </header>
    <body>
    <div class="menu">
        <ul>
            <li><a href="{{ ('/') }}"> INICIO </a></li>
            <li> <a href="{{'/catalogo'}}"> CATÁLOGO </a></li>
            <li> <a href="{{'/quienes-somos'}}">¿QUIÉNES SOMOS? </a></li>
            <li> <a href="{{'/contacto'}}"> CONTACTO </a></li>
            <li> <a href="{{'/register'}}"> REGISTRARME </a></li>
            <li> <a href="{{'/login'}}"> INICIAR SESIÓN </a></li>
         </ul>   
     </div>
    <section id= "contenido">
        <img class="mySlides" src="images/ecommerce.jpg"    width="1349px" height="300px">
        <img class="mySlides" src="images/money.jpg"        width="1349px" height="300px">
        <img class="mySlides" src="images/canasta.png"      width="1349px" height="300px">
        <img class="mySlides" src="images/ecommerce1.jpg"   width="1349px" height="300px">
        <img class="mySlides" src="images/teclado.jpg"      width="1349px" height="300px">
        <script>
        var myIndex = 0;
        carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
            }
            myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); // Change image every 2 seconds
        }
        </script>
    </section>
    <h2> CATEGORÍAS </h2>
    <section id="contenido2">
        <div class="producto">
        <a href="{{'/producto'}}"><img src="images/pulserass.jpg" width="350" height="300">
        </div>
        <div class="producto">
        <a href="{{'/mascaras'}}"><img src="images/mascaras.jpg" width="350" height="300">
        </div>
        <div class="producto">
        <a href="{{'/tablas-surf'}}"><img src="images/tabla-surf.jpg" width="350" height="300">
        </div>
    </section>
    
    <section id="contenido2">
    <div class="producto">
        <a href="{{'/ajedrez'}}"> <img src="images/ajedrez.jpg" width="350" height="300">
        </div>
        <div class="producto">
        <img src="images/mascaras mayas.jpg" width="350" height="300">
        </div>
        <div class="producto">
        <img src="images/cliente1.jpg" width="350" height="300">
        </div>
    </section> 

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