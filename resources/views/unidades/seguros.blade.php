@extends('layout')
@section('meta-title')
    Seguros | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Seguros Públicos de Salud</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Seguros Públicos de Salud</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Dirigir el cumplimiento en la difusión, capacitación y asistencia técnica de los procedimientos
                            administrativos técnico médicos de la Ley N° 1152 modificatoria a la Ley No 475 de Prestaciones de
                            Servicios de Salud Integral del Estado Plurinacional de Bolivia modificada por la Ley 1069 “ Hacia el
                            Sistema Único de Salud Universal y Gratuito“a las Coordinaciones de Red, Redes Municipales e Instancia
                            Técnica de Salud de los Gobiernos Autónomos Municipales del Departamento de Potosí y otras instancias que
                            así lo requieran para la aplicación correcta de la normativa legal.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigrama</h2>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Seguros Públicos de Salud
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/seguros-org.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection