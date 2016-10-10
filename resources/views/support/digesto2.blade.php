@extends('layouts.main')

@section('section') digesto @endsection

@section('content')

    @include('layouts.header')

    <div class="bg-digesto">

        <div class="main-digesto digesto-2">
            <a href="/digesto3"><img src="/images/muestra-digesto02.jpg" alt=""></a>
        </div>

    </div>

    {{--<script>
        $(document).on('click', '.main-digesto', function(e){
            e.preventDefault();
            window.location = '/digesto3'
        })
    </script>--}}

    @include('layouts.footer')

@endsection