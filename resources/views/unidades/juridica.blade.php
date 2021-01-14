@extends('layout')
@section('meta-title')
    Juridica | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Asesoría Jurídica</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Asesoría Jurídica</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Dar estricto cumplimiento a las disposiciones legales que rigen la materia instrumentando jurídicamente
                            las diferentes actividades y funciones del SEDES Potosí, prestando asesoramiento jurídico especializado a
                            todas las Unidades dependientes de la Institución. Realizando a la vez el seguimiento de Procesos Externos
                            (penales, laborales, coactivos fiscales y otros) en el que el SEDES Potosí es demandante o demandado,
                            sustanciando Procesos Administrativos por Responsabilidad por la función pública, a fin de lograr el
                            fortalecimiento de los roles asignados para el logro de una gestión administrativa eficaz y eficiente.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigrama</h2>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Asesoría Jurídica
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/juridica-org.jpg') }}" alt="">
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