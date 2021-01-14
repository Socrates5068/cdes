@extends('layout')
@section('meta-title')
    Promoción | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Promoción de la Salud</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Promoción de la Salud</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Diseñar, difundir e impulsar la aplicación de políticas, normas, contenidos, estrategias y procedimientos
                            de Promoción de la Salud en base al Modelo y Política de Salud Familiar Comunitario e Intercultural SAFCI,
                            en el nivel Local, Municipal y Departamental con participación social, intersectorialidad y pertinencia
                            cultural para el abordaje de las Determinantes Sociales de la Salud y la contribución en la eliminación de
                            la exclusión social en salud para el vivir bien.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigramas</h2>
                        <div id="accordion">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Unidad de Promoción de la Salud
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promocion-org.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                            Área de Medicina Tradicional e Interculturalidad
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promo-med-nat.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            Área Social Buen Trato y Género
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promo-buen-trato.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                            Área de Educación para la Vida
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promo-educacion.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                            Área de Salud Comunitaria y Movilización Social
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promo-comunitaria.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                            Área de Alimentación y Nutrición
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promo-nutricion.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                            Área de Discapacidad
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/promo-discapacidad.jpg') }}" alt="">
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