<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>League Of Legends</title>
</head>

<body>

    <nav>
        <div class="nav-wrapper indigo darken-4">
            <a href="/" class="brand-logo">League Of Bronces</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Campeones">Campeones</a></li>
                <li><a href="Videos">Videos</a></li>
            </ul>
        </div>
    </nav>
 
@yield('seccion')
    
<!--Footer-->
<footer class="page-footer indigo darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">League Of Bronces </h5>
                <p class="grey-text text-lighten-4">Visitanos en Youtube como akagamiing
                </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 Copyright Akagamiing
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>