@extends('layout')
@section('meta-title')
    Epidemiologia | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Epidemiología e Investigación</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Epidemiología e Investigación</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Dirigir, coordinar y fortalecer técnica y gerencialmente a la Unidad de Epidemiologia e Investigación de
                            acuerdo a las Políticas de Salud, normativas establecidas y planes estratégicos institucionales,
                            contribuyendo de esta forma al logro de la misión y visión del Plan de desarrollo Sectorial de Salud,
                            realizando intervenciones técnicas y oportunas para la promoción, prevención y control de enfermedades
                            infectocontagiosas, crónicas y de reporte inmediato.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigramas</h2>
                        <div id="accordion">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Unidad de Redes de Servicios de Salud
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">

                                            <div class="picture cf">
                                                <figure>
                                                    <a href="{{ asset('assets/img/organigramas/epidemiologia-org.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                                                        <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemiologia-org.jpg') }}" alt="">
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
                                            Área de Enlace
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-enlace.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            Área de Enfermedades no transmisibles y Salud Renal
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-no-transmitibles.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                            Área de Vectores
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-vectores.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                            Área de Tuberculosis y Lepra
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-tuber.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                            Área del P.A.I.
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-pai.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                            Área de Enfermedades Emergentes y Reemergentes - Zoonosis
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-emergentes.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseEight"
                                                aria-expanded="false" aria-controls="collapseEight">
                                            Área de Salud Ambiental y Salud Ocupacional
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">

                                            <div class="picture cf">
                                                <figure>
                                                    <a href="{{ asset('assets/img/organigramas/epidemio-ambiental.jpg') }}" itemprop="contentUrl"
                                                       data-size="2197x1539">
                                                        <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-ambiental.jpg') }}" alt="">
                                                    </a>
                                                </figure>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseNine"
                                                aria-expanded="false" aria-controls="collapseNine">
                                            Área de ITS/VIH/ SIDA y HV
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-vih.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseTen"
                                                aria-expanded="false" aria-controls="collapseTen">
                                            Área de Laboratorio de Referencia Departamental para la Vigilancia Epidemiológica
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">

                                            <div class="picture cf">
                                                <figure>
                                                    <a href="{{ asset('assets/img/organigramas/epidemio-lab-ref.jpg') }}" itemprop="contentUrl"
                                                       data-size="2197x1539">
                                                        <img class="img-fluid" src="{{ asset('assets/img/organigramas/epidemio-lab-ref.jpg') }}" alt="">
                                                    </a>
                                                </figure>
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
    </div>
@endsection