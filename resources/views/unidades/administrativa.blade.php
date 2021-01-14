@extends('layout')
@section('meta-title')
    Administrativa | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Administrativa Financiera</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Administrativa Financiera</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Administrar los recursos financieros, físicos, humanos y elaborar el presupuesto del SEDES Potosí de la
                            gestión en coordinación con Presupuestos y la Unidad de Planificación y Proyectos; así mismo de brindar el
                            apoyo logístico necesario para coadyuvar a los objetivos institucionales, articulando el proceso
                            administrativo financiero entre el Servicio Departamental de Salud Potosí, el Gobierno Autónomo
                            Departamental de Potosí y todas las instancias que así se requieran.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigramas</h2>
                        <div id="accordion">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Unidad Administrativa Financiera
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">

                                            <div class="picture cf">
                                                <figure>
                                                    <a href="{{ asset('assets/img/organigramas/administrativa-org.jpg') }}" itemprop="contentUrl"
                                                       data-size="2197x1539">
                                                        <img class="img-fluid" src="{{ asset('assets/img/organigramas/administrativa-org.jpg') }}" alt="">
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
                                            Área Administrativa
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-administrativa.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            Área Financiera
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-financiera.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                            Área de Contabilidad
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-contabilidad.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                            Área de Tesorería
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-tesoreria.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                            Área de Activos Fijos
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-activos.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                            Área de Presupuestos
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-presupuestos.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseEight"
                                                aria-expanded="false" aria-controls="collapseEight">
                                            Área de Almacenes
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-almacenes.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseNine"
                                                aria-expanded="false" aria-controls="collapseNine">
                                            Área de Archivos
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-archivos.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h3 class="accordion-heading">
                                        <button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseTen"
                                                aria-expanded="false" aria-controls="collapseTen">
                                            Área de Transporte
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/adm-transportes.jpg') }}" alt="">
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