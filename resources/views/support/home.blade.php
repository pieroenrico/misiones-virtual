@extends('layouts.main')

@section('section') home @endsection

@section('content')
    <div class="loading"><img src="/images/ring.svg" alt=""></div>

    @include('layouts.header-home')

    <div class="animable no-display" id="bg-main">

    </div>

    <div class="video">
        <a href="#" class="opener"><video autoplay class="bg-video" id="video1">
                <source src="/video/video.mp4" type="video/mp4">
            </video></a>
    </div>

    @include('layouts.footer')

@endsection