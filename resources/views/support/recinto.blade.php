@extends('layouts.main')

@section('section') recinto @endsection

@section('content')

    @include('layouts.header')

    <div class="bg-recinto">

        <div class="main-recinto">

            <div class="menu-recinto">
                <div class="btn-recinto btn-recinto-1"><a href=""><img src="/images/btrecinto1.png" alt=""></a></div>
                <div class="btn-recinto btn-recinto-2"><a href=""><img src="/images/btrecinto2.png" alt=""></a></div>
                <div class="btn-recinto btn-recinto-3"><a href=""><img src="/images/btrecinto3.png" alt=""></a></div>
            </div>


            <script>
                $(document).on('click','.btn-recinto-3', function(e){
                    e.preventDefault();
                    $('.leyes').fadeIn();
                })

                $(document).on('click', '.leyes-content table tr', function(e){
                    e.preventDefault();
                    if($(this).hasClass('selected')) {
                        $(this).removeClass('selected')
                    }else{
                        $('.leyes-content table tr').removeClass('selected')
                        $(this).addClass('selected')
                    }
                })
            </script>

            <div class="leyes">

                <div class="leyes-header">
                    <h3>Leyes Vigentes no Consolidadas. Período Legislativo 2016</h3>
                </div>

                <div class="leyes-content">

                    <table>

                        <thead>
                            <tr>
                                <th width="100">Norma</th>
                                <th>Tema General</th>
                                <th width="150">Nro Expediente</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>XVII-88</td>
                                <td>Creación del programa provincial del recién nacido en riesgo
                                
                                <div class="opciones">
                                    <div class="btn-opcion btn-opcion-1"><a href="">Descargar Proyecto</a></div>
                                    <div class="btn-opcion btn-opcion-2"><a href="">Descargar Dictamen</a></div>
                                    <div class="btn-opcion btn-opcion-3"><a href="">Descargar Sanción</a></div>
                                </div>
                                </td>
                                <td>XVII-88</td>
                            </tr>

                            <tr>
                                <td>XVI-116</td>
                                <td>Banco Provincial del Germpoplasma Animal y Organismos No Vegetales

                                    <div class="opciones">
                                        <div class="btn-opcion btn-opcion-1"><a href="">Descargar Proyecto</a></div>
                                        <div class="btn-opcion btn-opcion-2"><a href="">Descargar Dictamen</a></div>
                                        <div class="btn-opcion btn-opcion-3"><a href="">Descargar Sanción</a></div>
                                    </div></td>
                                <td>D-39721/13</td>
                            </tr>

                            <tr>
                                <td>XVII-89</td>
                                <td>Instituye al año 2016 como "Año de la Declaración: No a las Drogas y al Narcotráfico, Sí a la vida.
                                Tomemos conciencia e involucrémonos entre todos".

                                    <div class="opciones">
                                        <div class="btn-opcion btn-opcion-1"><a href="">Descargar Proyecto</a></div>
                                        <div class="btn-opcion btn-opcion-2"><a href="">Descargar Dictamen</a></div>
                                        <div class="btn-opcion btn-opcion-3"><a href="">Descargar Sanción</a></div>
                                    </div></td>
                                <td>D-44870/16</td>
                            </tr>

                            <tr>
                                <td>XVII-90</td>
                                <td>Difusión de Medidas de Prevención y Promoción de la Salud en el Dorso de Boletas
                                o Facturas de Pago

                                    <div class="opciones">
                                        <div class="btn-opcion btn-opcion-1"><a href="">Descargar Proyecto</a></div>
                                        <div class="btn-opcion btn-opcion-2"><a href="">Descargar Dictamen</a></div>
                                        <div class="btn-opcion btn-opcion-3"><a href="">Descargar Sanción</a></div>
                                    </div></td>
                                <td>D-45204/16</td>
                            </tr>

                            <tr>
                                <td>I-162</td>
                                <td>Modificatoria de Ley de Ministerios. Incorporación de Ministerios de Industria, de
                                Deportes, Secretaría de Energía y de Agricultura Familiar

                                    <div class="opciones">
                                        <div class="btn-opcion btn-opcion-1"><a href="">Descargar Proyecto</a></div>
                                        <div class="btn-opcion btn-opcion-2"><a href="">Descargar Dictamen</a></div>
                                        <div class="btn-opcion btn-opcion-3"><a href="">Descargar Sanción</a></div>
                                    </div></td>
                                <td>PE-9631/15</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


        </div>



    </div>

    @include('layouts.footer')

@endsection