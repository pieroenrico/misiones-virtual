@extends('layouts.main')

@section('section') home @endsection

@section('content')
    <div class="loading"><img src="/images/ring.svg" alt=""></div>

    @include('layouts.header-home')

    <div class="animable no-display bg-main">

        <div class="bandera-animada"></div>
        <a href="/lobby" class="enter"><div class="animacion-bienvenida"></div></a>
        <div class="animados-home"></div>

    </div>

    <div class="video">
        <a href="#" class="opener"><video autoplay class="bg-video" id="video1">
                <source src="/video/video.mp4" type="video/mp4">
                <source src="/video/video.ogg" type="video/ogg">
            </video></a>
    </div>

    <div class="warn">
        Por favor rota tu teléfono para una mejor experiencia.
    </div>

    <div class="is_mobile"></div>

    <script>
        $( document ).ready(function() {
            var is_mobile = false;

            if( $('.is_mobile').css('display')=='none') {
                is_mobile = true;
            }

            if (is_mobile == true) {
                //Conditional script here
                $('.video video').trigger('pause')
            }
        });
    </script>

    @include('layouts.footer')

@endsection