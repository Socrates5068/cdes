@extends('layout')
@section('meta-title')
    Misión y Vision | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>MISIÓN Y VISIÓN</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Institución</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Misión y Visión</span>
            </div>
        </div>
    </div>

    <section id="seccion-vision" class="featured-bg section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Nuestra Misión</h2>
                        <p>Conoce la Misión de nuestra institución, que trabaja diariamente para mejorar la calidad de vida y salud​</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="{{ asset('assets/img/about/img-2.jpg') }}" alt="">
                </div>
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <div class="featured-item">
                        <h2 class="intro-title"></h2>
                        <h3 class="intro-title"></h3>
                        <div class="featured-content">
                            <p>El Servicio Departamental de Salud Potosí, se constituye en la cabeza de sector salud en el departamento bajo la tuición del Gobierno Autónomo del Departamento, cuyo propósito fundamental es adecuar y articular la política nacional de salud en el departamento; de esta manera busca contribuir al desarrollo humano, a través de un sistema de salud accesible, con equidad de género, basado en la salud familiar, comunitaria e intercultural, que atiende con intersectorialidad, generando capacidades individuales para la atención integral a la población del departamento de Potosí, incluyendo a excluidos y marginados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="seccion-mision" class="featured-bg section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Nuestra Visión</h2>
                        <p>Conoce la Visión de nuestra institución, que trabaja diariamente para mejorar la calidad de vida y salud​</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <div class="featured-item">

                        <div class="featured-content">
                            <p>La población potosina accede al Sistema Único, Intercultural y Comunitario de Salud, respetuoso de las culturas indígenas y originarias, enriquecido con la medicina tradicional, es inclusivo, equitativo, solidario, de calidad, y calidez, con pertinencia con las dimensiones económicas productivas, socioculturales y político organizativas, generador de capacidades individuales, familiares y comunitarias, dinámico, interactivo, dialógico, intersectorial, descentralizado, liderado por el SEDES, que actúa sobre los determinantes de salud; con participación plena en todos sus niveles, orientado hacia la promoción de hábitos saludables, promotor de la actividad física y deportiva, que cuida, cría y controla el ambiente, que promueve y se constituye en espacio de organización y movilización socio comunitaria del vivir bien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="{{ asset('assets/img/about/img-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection