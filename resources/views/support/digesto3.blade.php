@extends('layouts.main')

@section('section') digesto @endsection

@section('content')

    @include('layouts.header')

    <div class="bg-digesto">

        <div class="main-digesto digesto-3">
            <a href="/digesto4"><img src="/images/muestra-digesto03.jpg" alt=""></a>
        </div>

    </div>

    {{--<script>
        $(document).on('click', '.main-digesto', function(e){
            e.preventDefault();
            window.location = '/digesto4'
        })
    </script>--}}

    @include('layouts.footer')

@endsection