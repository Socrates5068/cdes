@extends('layout')
@section('meta-title')
    Dirección | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Dirección Técnica</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Dirección Técnica</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="property-slider">
                        <div id="property-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ asset('assets/img/unidades/dir-foto1.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/unidades/dir-foto2.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/unidades/dir-foto3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Promover la salud de la población potosina en el marco del Plan de Desarrollo Económico Social, Plan
                            Sectorial del Ministerio de Salud y el Plan Territorial de Desarrollo Integral del Departamento de Potosí,
                            orientado al cumplimiento de las acciones a través de planes, programas y proyectos sectoriales, para
                            contribuir a mejorar la situación de salud y las condiciones de vida en igualdad de oportunidades que
                            posibilite el ejercicio de sus derechos.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigrama</h2>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Dirección Técnica
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/direccion-org.jpg') }}" alt="">
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