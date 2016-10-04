@extends('layouts.main')

@section('section') lobby @endsection

@section('content')

@include('layouts.header')

<div class="bg-lobby">

    <div class="main-lobby">

        <div class="login"><a href="">Iniciar<br>Sesión</a></div>
        <div class="chat"></div>

        <div class="lobby-menu">

            <div class="lobby-menu-item dir-left">
                <a href="">Recinto Diputados</a>
                <div class="arrow"><i class="fa fa-arrow-right"></i></div>
            </div>

            <div class="lobby-menu-item dir-right">
                <div class="arrow"><i class="fa fa-arrow-left"></i></div>
                <a href="">Digesto Jurídico</a>
            </div>

            <div class="lobby-menu-item dir-left">
                <a href="">Sala de Chat</a>
                <div class="arrow"><i class="fa fa-arrow-up"></i></div>
            </div>

        </div>

        <div class="totem">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/jRluQlsfTOc" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="banner">

            </div>
        </div>

    </div>

</div>

@include('layouts.footer')

@endsection