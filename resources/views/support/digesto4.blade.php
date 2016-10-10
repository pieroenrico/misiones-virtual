@extends('layouts.main')

@section('section') digesto @endsection

@section('content')

    @include('layouts.header')

    <div class="bg-digesto">

        <div class="main-digesto digesto-4">
            <a href="/digesto5"><img src="/images/muestra-digesto04.jpg" alt=""></a>
        </div>

    </div>

    {{--<script>
        $(document).on('click', '.main-digesto', function(e){
            e.preventDefault();
            window.location = '/digesto5'
        })
    </script>--}}

    @include('layouts.footer')

@endsection