@extends('layouts.main')

@section('section') digesto @endsection

@section('content')

    @include('layouts.header')

    <div class="bg-digesto">

        <div class="main-digesto digesto-1">
            <a href="/digesto2"><img src="/images/muestra-digesto01.jpg" alt=""></a>
        </div>

    </div>

    {{--<script>
        $(document).on('click', '.main-digesto', function(e){
            e.preventDefault();
            window.location = '/digesto2'
        })
    </script>--}}

    @include('layouts.footer')

@endsection