@extends('layout')
@section('meta-title')
    Redes | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Redes de Servicios de Salud</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Unidades</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Redes de Servicios de Salud</span>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="inner-box property-dsc">
                        <h2 class="desc-title">Objetivo</h2>
                        <p>Dirigir y garantizar el fortalecimiento del sistema de salud del departamento cumpliendo y haciendo
                            cumplir las normas nacionales, departamentales para un buen manejo del Sistema de Salud, enmarcado en la
                            Ley 1152 Sistema Único de Salud, PEI, SAFCI y toda normativa vigente en el ejercicio de sus funciones.</p>
                    </div>

                    <div class="inner-box accordion-fp">
                        <h2 class="desc-title">Organigramas</h2>
                        <div id="accordion">

<div class="card">
    <div class="card-header" id="headingOne">
        <h3 class="accordion-heading">
<button class="accordion-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Unidad de Redes de  Servicios de Salud
</button>
</h3>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-org.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-org.jpg') }}" alt="">
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
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Área Atención Integral a la Mujer Salud Sexual y Reproductiva
</button>
</h3>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-integral-mujer.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-integral-mujer.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingThree">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Área Atención Integral al Menor de 5 Años (A.I.M.C.A)
</button>
</h3>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-integral-menor.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-integral-menor.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingFour">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
Área Salud Mental, Escolar y Adolescentes
</button>
</h3>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-salud-mental.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-salud-mental.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingFive">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
Área Laboratorio
</button>
</h3>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-laboratorio.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-laboratorio.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingSix">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
Área de Farmacia y Suministros
</button>
</h3>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-farmacia.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-farmacia.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingSeven">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
11 Coordinaciones de Red
</button>
</h3>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-11coordina.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-11coordina.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingEight">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
Área Salud Oral
</button>
</h3>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/epidemio-ambiental.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-salud-oral.jpg') }}" alt="">
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
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
Área Gestión de Hospitales
</button>
</h3>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-gestion.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-gestion.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingTen">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
Área de Gestión de Calidad y Auditoria en Salud
</button>
</h3>
    </div>
    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-calidad.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-calidad.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingEleven">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
Área de Medicina Transfusional
</button>
</h3>
    </div>
    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-transfusional.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-transfusional.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="heading12">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
Banco de Sangre de Referencia Departamental Potosí
</button>
</h3>
    </div>
    <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-banco.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-banco.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="heading13">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
Área de Coordinación de Emergencias en Salud Departamental
</button>
</h3>
    </div>
    <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-coord-emergencias.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-coord-emergencias.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="heading14">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
Centro Coordinador de Emergencias en Salud Departamental
</button>
</h3>
    </div>
    <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-centro-coord-emergencias.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-centro-coord-emergencias.jpg') }}" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="heading15">
        <h3 class="accordion-heading">
<button class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
Centro de Emergencias
</button>
</h3>
    </div>
    <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
        <div class="card-body">
            <div class="thumb">
                <div class="picture cf">
                    <figure>
                        <a href="{{ asset('assets/img/organigramas/redes-centro-emergencias.jpg') }}" itemprop="contentUrl" data-size="2197x1539">
                            <img class="img-fluid" src="{{ asset('assets/img/organigramas/redes-centro-emergencias.jpg') }}" alt="">
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