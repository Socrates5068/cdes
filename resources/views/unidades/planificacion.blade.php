@extends('layout')
@section('meta-title')
    Planificación | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Planificación y Proyectos</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Planificación y Proyectos</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Contribuir al fortalecimiento de la Unidad de Planificación y Proyectos mediante el cumplimiento de la
                            planificación estratégica, organización y métodos , suscripción de convenios y seguimiento a las
                            recomendaciones de auditoria del Servicio Departamental de Salud Potosí.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigramas</h2>
                        <div id="accordion">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Unidad de Planificación y Proyectos
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">

                                            <div class="picture cf">
                                                <figure>
                                                    <a href="{{ asset('assets/img/organigramas/planificacion-org.jpg') }}" itemprop="contentUrl"
                                                       data-size="2197x1539">
                                                        <img class="img-fluid" src="{{ asset('assets/img/organigramas/planificacion-org.jpg') }}" alt="">
                                                    </a>
                                                </figure>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                            Área Planificación
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/plani-planificacion.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            Área Proyectos
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/plani-proyectos.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                            Área SDIS-VE
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/plani-sdis.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                            Área Capacitación y Acreditación Profesional
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/plani-capacitacion.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                            Área de Comunicación
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/plani-comunicacion.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                            Área de Sistemas
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/plani-sistemas.jpg') }}" alt="">
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