@extends('layout')
@section('meta-title')
    Antecedentes | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>ANTECEDENTES INSTITUCIONALES</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Institución</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Antecedentes</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->



    <div class="antecedentes-box container">
        <div class="col-12 col-md-12">
            <div>

                <div class="item">
                    <div class="icon">
                        <span class="ion-android-checkmark-circle"></span>
                    </div>
                    <p class="description"> <ul><li>El D.S. 25060 y las disposiciones vigentes en materia de salud, establece el modelo básico de organización, atribuciones y funcionamiento de los Servicios Departamentales de Salud.</li></ul></p>
                </div>

                <div class="item">
                    <div class="icon">
                        <span class="ion-android-checkmark-circle"></span>
                    </div>
                    <p class="description"> <ul><li>El Servicio Departamental de Salud Potosí es un órgano desconcentrado de la gobernación del departamento, tiene estructura propia e independencia de gestión administrativa, competencia de ámbito departamental y depende linealmente del Gobernador a traves de la Secretaría de Desarrollo Social del Departamento y funcionalmente del Ministerio de Salud y Deportes.</li></ul></p>
                </div>

                <div class="item">
                    <div class="icon">
                        <span class="ion-android-checkmark-circle"></span>
                    </div>
                    <p class="description"> <ul><li>El Servicio Departamental de Salud Potosí desarrolla sus actividades en el marco del ordenamiento legal que rige el sistema nacional de salud, así como en el marco de las Leyes: 1178 (SAFCO), 1654 Descentralización Administrativa, 1551 Participación Popular, Ley 2426 (SUMI) y sus respectivos reglamentos y normas.</li></ul></p>
                </div>


                <div class="item">
                    <div class="icon">
                        <span class="ion-android-checkmark-circle"></span>
                    </div>
                    <p class=""> <ul><li>El Servicio Departamental de Salud Potosí, inicio sus actividades el año 1923 con el nombre de Sanidad Departamental.</li></ul></p>
                </div>

                <div class="item">
                    <div class="icon">
                        <span class="ion-android-checkmark-circle"></span>
                    </div>
                    <p> <ul><li>En 1997, con la promulgación del D.S. 24833 se denominó Unidad Departamental de Salud Potosí (UDES).</li></ul></p>
                </div>

                <div class="item">
                    <div class="icon">
                        <span class="ion-android-checkmark-circle"></span>
                    </div>
                    <p class="description"> <ul><li>En 1998, mediante D.S. 25060 adquiere la denominación de SEDES, cuyo rol es de ser “Cabeza del sector salud en todo el departamento y representante del Ministerio de Salud y Deportes”.</li></ul></p>
                </div>

            </div>

        </div>
    </div>



    <!-- About Section Start -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="img-thumb">
                        <img src="{{ asset('assets/img/about/img-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="img-thumb">
                        <img src="{{ asset('assets/img/about/img-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="about-conter">
                        <h3>Historia</h3>
                        <p>Las actividades de salud de Potosí se iniciaron en el año 1923 con la vigencia de la primera Sanidad Departamental, establecimiento ubicado en calle Linares esquina plaza 10 de Noviembre.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

@endsection