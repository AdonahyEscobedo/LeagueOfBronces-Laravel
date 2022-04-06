@extends('welcome')
@section('seccion')

<div class="carru">
    <div class="carousel">
        <a class="carousel-item" href="#"><img src="{{ asset('img/AlistarL.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{ asset('img/GnarL.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{ asset('img/NautilusL.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{ asset('img/RengarL.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{ asset('img/TeemoL.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{ asset('img/WarwickL.jpg') }}"></a>
    </div>

</div>

<div class="collection">
    <a href="https://www.leagueoflegends.com/es-es/champions/alistar/" class="collection-item">Aprende de
        Alistar</a>
    <a href="https://www.leagueoflegends.com/es-es/champions/gnar/" class="collection-item active">Aprende de
        Gnar</a>
    <a href="https://www.leagueoflegends.com/es-es/champions/nautilus/" class="collection-item">Aprende de
        Nautilus</a>
    <a href="https://www.leagueoflegends.com/es-es/champions/rengar/" class="collection-item active">Aprende de
        Rengar</a>
</div>

<div class="row">
    <div class="col s12 m6 l3">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/NauWall.jpg') }}">
                <span class="card-title">Nautilus "El Titan Avisal"</span>
            </div>
            <div class="card-content">
                <p>Un campeon tanque soporte que tiene un ancla como arma, con ella puede llegar facilmente
                    a sus enemigos lanzandola para paralizarlos, es una buena opcion para aquellos que comienzan.
                </p>
            </div>
            <div class="card-action">
                <a href="https://www.leagueoflegends.com/es-es/champions/nautilus/">Aprender Mas...</a>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/GnarWall.jpg') }}">
                <span class="card-title">Gnar "El Eslabón Perdido"</span>
            </div>
            <div class="card-content">
                <p>El pequeño Yordle aunque adorable en su forma mini, cuando completa el 100%
                    de su furia se convierte en un enorme mounstro tanque capas de destruir lo que sea.
                </p>
            </div>
            <div class="card-action">
                <a href="https://www.leagueoflegends.com/es-es/champions/gnar/">Aprender Mas...</a>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/RengarWall.jpg') }}">
                <span class="card-title">Rengar "El Acechador Orgulloso"</span>
            </div>
            <div class="card-content">
                <p>Un gatito cazador excelente opcion para llevar en jungla
                </p>
            </div>
            <div class="card-action">
                <a href="https://www.leagueoflegends.com/es-es/champions/rengar/">Aprender Mas...</a>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/TeemoWall.jpg') }}">
                <span class="card-title">Teemo "El Explorador Veloz"</span>
            </div>
            <div class="card-content">
                <p>Aunque paresca un tejon adorable en verdad es la viva imagen del demonio, con su poderoza
                    servatana y sus hongos del mismisimo satan!! podra hacerte explotar de coraje al intentar
                    matarlo, te llevaras una gran sorpresa.
                </p>
            </div>
            <div class="card-action">
                <a href="https://www.leagueoflegends.com/es-es/champions/teemo/">Aprender Mas...</a>
            </div>
        </div>
    </div>
</div>

@stop