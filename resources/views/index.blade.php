@extends('layout')
@section('meta-title')
    Inicio | Servicio Departamental de Salud Potosí
@endsection
@section('banner')
{{-- Ventana emegente --}}
<div class="container">
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="popup" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Titulo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               {{-- <img src="https://www.hogar.mapfre.es/media/2018/09/hamburguesa-sencilla.jpg" alt=""> --}}
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://www.hogar.mapfre.es/media/2018/09/hamburguesa-sencilla.jpg"
                        alt="" style="width: 800px">
                    </div>
                    <div class="item">
                        <img src="https://blog.lewolang.com/images/340a2a5ba54afa16f3c75200a75bf96b.jpg"
                        alt="" style="width: 800px">
                    </div>
                    <div class="item">
                        <img src="https://www.recreoviral.com/wp-content/uploads/2015/05/20-comidas-para-preparar-aunque-estes-en-quiebra-3.jpg"
                        alt="" style="width: 800px">
                    </div>
                </div>
            
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> --}}
        </div>
      </div>
    </div>
  </div>      
  <script>
    $("#popup").modal();      
  </script>

    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1" class="active"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slide0.jpg" alt="Sedes Potosí">
                <div class="overlay"></div>
                <div class="carousel-caption d-md-block">
                    <h4 class="fadeInDown wow" data-wow-delay=".9s">Medicina Tradicional</h4>
                    <h1 class="wow fadeInDown heading" data-wow-delay=".4s">"Salud Intercultural y Comunitaria"</h1>
                    <!-- <p class="fadeInUp wow" data-wow-delay=".6s">Bootstrap Template</p> -->
                    <a href="#seccion-misionyvision" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Empezar</a>
                    <a href="#seccion-noticias" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Noticias</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/slider/slide0.jpg" alt="Sedes Potosí">
                <div class="overlay"></div>
                <div class="carousel-caption d-md-block">
                    <h4 class="fadeInDown wow" data-wow-delay=".9s">SEDES POTOSÍ</h4>
                    <h1 class="wow bounceIn heading" data-wow-delay=".7s">"Trabajando por la Salud del Departamento"</h1>
                   
                     <h4 class="fadeInDown wow" data-wow-delay=".9s">#QUEDATE EN CASA</h4>
                    <!-- <p class="fadeInUp wow" data-wow-delay=".6s"></p> -->
                    <!--<a href="#" class="fadeInUp wow btn btn-border" data-wow-delay=".8s">Noticias</a> -->
                    <a href="#seccion-misionyvision" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Empezar</a>
                    <a href="#seccion-noticias" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Noticias</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slide0.jpg" alt="Sedes">
                <div class="overlay"></div>
                <div class="carousel-caption d-md-block">
                    <h4 class="fadeInDown wow" data-wow-delay=".9s">Servicios de Salud</h4>
                    <h1 class="wow fadeInUp heading" data-wow-delay=".6s">En los 41 Municipios del Departamento</h1>
                    <!-- <p class="fadeInUp wow" data-wow-delay=".6s"></p> -->
                    <a href="#seccion-unidades" class="fadeInUp wow btn btn-common" data-wow-delay=".8s">Unidades</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('antecedentes')
    <section id="seccion-antecedentes" class="property section-padding wow fadeInUp animated">
        <div class="container">
            <div class="antecedentes-box container">
                <div class="col-12 col-md-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Antecedentes Institucionales</h2>
                        <p>Los antecedentes referidos a la constitución del Sedes Potosí se ubican en el marco de las siguientes
                            gestiones:</p>
                    </div>
                    <div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>El D.S. 25060 y las disposiciones vigentes en materia de salud, establece el modelo básico de
                                    organización, atribuciones y funcionamiento de los Servicios Departamentales de Salud.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>El Servicio Departamental de Salud Potosí es un órgano desconcentrado de la gobernación del
                                    departamento, tiene estructura propia e independencia de gestión administrativa, competencia de
                                    ámbito departamental y depende linealmente del Gobernador a traves de la Secretaría de Desarrollo
                                    Social del Departamento y funcionalmente del Ministerio de Salud y Deportes.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>El Servicio Departamental de Salud Potosí desarrolla sus actividades en el marco del ordenamiento
                                    legal que rige el sistema nacional de salud, así como en el marco de las Leyes: 1178 (SAFCO), 1654
                                    Descentralización Administrativa, 1551 Participación Popular, Ley 2426 (SUMI) y sus respectivos
                                    reglamentos y normas.</li>
                            </ul>
                            </p>
                        </div>


                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="">
                            <ul>
                                <li>El Servicio Departamental de Salud Potosí, inicio sus actividades el año 1923 con el nombre de
                                    Sanidad Departamental.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p>
                            <ul>
                                <li>En 1997, con la promulgación del D.S. 24833 se denominó Unidad Departamental de Salud Potosí
                                    (UDES).</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>En 1998, mediante D.S. 25060 adquiere la denominación de SEDES, cuyo rol es de ser “Cabeza del
                                    sector salud en todo el departamento y representante del Ministerio de Salud y Deportes”.</li>
                            </ul>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('mision')
    <section id="seccion-misionyvision" class="featured-bg section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Misión y Visión</h2>
                        <p>Conoce la Misión y Visión de nuestra institución, que trabaja diariamente para mejorar la calidad de vida
                            y salud​</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="assets/img/about/img-2.jpg" alt="">
                </div>
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <h2 class="intro-title"></h2>
                    <h3 class="title-sub">"Trabajando por la Salud del Departamento"</h3>
                    <p class="intro-desc">Planificación, gestión, coordinación y control de la salud.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="featured-item">
                                <div class="icon">
                                    <i class="lni-invention"></i>
                                </div>
                                <h3><a href="{{ route('pages.mision') }}">Misión</a></h3>
                                <div class="featured-content">
                                    <p>El Servicio Departamental de Salud Potosí, se constituye en la cabeza de sector salud en el
                                        departamento bajo la tuición del Gobierno Autónomo del Departamento, cuyo propósito fundamental es
                                        adecuar y articular la política nacional de salud en el departamento...</p>
                                    <h2><a href="{{ route('pages.mision') }}" class="link-c link-icon">Leer más <span
                                                    class="ion-ios-arrow-forward"></span></a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="featured-item">
                                <div class="icon">
                                    <i class="lni-eye"></i>
                                </div>
                                <h3><a href="{{ route('pages.mision') }}">Visión</a></h3>
                                <div class="featured-content">
                                    <p>La población potosina accede al Sistema Único, Intercultural y Comunitario de Salud, respetuoso de
                                        las culturas indígenas y originarias, enriquecido con la medicina tradicional, es inclusivo,
                                        equitativo, solidario, de calidad, y calidez...</p>
                                    <h2><a href="{{ route('pages.mision') }}" class="link-c link-icon">Leer más <span
                                                    class="ion-ios-arrow-forward"></span></a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('galeria')
    <section class="latest-property section-padding wow fadeInUp animated">
        <div class="container" id="galeria">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Galería</h2>
                        <p>Imágenes de las actividades más relevantes realizadas por la Institución</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.8s">
                    <div id="latest-property" class="owl-carousel">
                        @foreach($images as $image)
                            <div class="item">
                                <div class="property-main">
                                    <div class="property-wrap">
                                        <div class="property-item">
                                            <div class="item-thumb">
                                                <a class="hover-effect" href="{{ route('pages.galeria') }}">
                                                    <img class="img-fluid" src="{{ url($image->filename) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="item-body">
                                                <h3 class="property-title"><a href="{{ route('pages.galeria') }}">{{ $image->title }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('unidades')
<section id="seccion-unidades" class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">Unidades</h2>
                    <p>La estructura institucional se compone de las siguientes unidades organizativas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                    <div class="icon">
                        <i class="ion-briefcase"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.direccion') }}">Dirección Técnica</a></h4>
                        <p class="description">Administra y promueve la salud de la población en el marco del Plan de Desarrollo Económico Social, Plan Sectorial del Ministerio de Salud y el Plan Territorial de Desarrollo Integral.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                    <div class="icon">
                        <i class="ion-clipboard"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.planificacion') }}">Planificación y Proyectos</a></h4>
                        <p class="description">Asesora en la organización y reglamentación técnica institucional y contribuye en la formulación, ejecución de proyectos, programas, planes estratégicos y convenios.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                    <div class="icon">
                        <i class="fa fa-balance-scale"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.juridica') }}">Asesoría Jurídica</a></h4>
                        <p class="description">Da estricto cumplimiento a las disposiciones legales que rigen la materia, instrumentando jurídicamente las diferentes actividades y funciones, prestando asesoramiento jurídico.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="0.8s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
                    <div class="icon">
                        <i class="ion-calculator"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.administrativa') }}">Administrativa Financiera</a></h4>
                        <p class="description">Fortalece y consolida el modelo de gestión administrativa y financiera del SEDES Potosí, a partir de los sistemas de la Ley 1178 y la incorporación de los procesos de registro en el SIGEP.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
                    <div class="icon">
                        <i class="ion-ios-bookmarks"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.auditoria') }}">Auditoría Interna</a></h4>
                        <p class="description">Evalua el grado de cumplimiento de las Normas y Procedimientos establecidos en la Ley 1178 de acuerdo al Art. 15, establecido en las Normas de Auditoría Gubernamental, con independencia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                    <div class="icon">
                        <i class="ion-ios-people"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.redes') }}">Redes de Servicios</a></h4>
                        <p class="description">Fortalece el buen manejo del sistema de salud, enmarcado en el PEI, SAFCI a través del cumplimiento normativo administrativo e instrumentos técnicos en las coordinaciones y redes de salud.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="1.4s" style="visibility: visible;-webkit-animation-delay: 1.4s; -moz-animation-delay: 1.4s; animation-delay: 1.4s;">
                    <div class="icon">
                        <i class="ion-bug"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.epidemiologia') }}">Epidemiología</a></h4>
                        <p class="description">Desarrolla acciones integrales y de calidad en las áreas de enfermedades prevenibles por vacunación, enfermedades transmisibles y no transmisibles y salud ambiental.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="1.6s" style="visibility: visible;-webkit-animation-delay: 1.6s; -moz-animation-delay: 1.6s; animation-delay: 1.6s">
                    <div class="icon">
                        <i class="ion-medkit"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.seguros') }}">Seguros Públicos</a></h4>
                        <p class="description">Fortalece la aplicación de la gestión técnica, administrativa y financiera de la Ley No. 1152 "Hacia el Sistema Único de Salud Universal y Gratuita", al Sub-Sistema e Instancia Técnica de Salud.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight animated" data-wow-delay="1.8s" style="visibility: visible;-webkit-animation-delay: 1.8s; -moz-animation-delay: 1.8s; animation-delay: 1.8s;">
                    <div class="icon">
                        <i class="ion-speakerphone"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="title"><a href="{{ route('pages.promocion') }}">Promoción</a></h4>
                        <p class="description">Fortalece la coordinación entre el sector salud con los diferentes sectores de forma participativa y corresponsable para el abordaje de las determinantes sociales de la salud, en el marco de SAFCI.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('noticias')

    <section id="seccion-noticias" class="section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Noticias</h2>
                        <p>Mantente al tanto de las noticias más recientes de todo el trabajo que realiza el Servicio Departamental
                            de Salud Potosi</p>
                    </div>
                </div>
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-xs-12">

                        <div class="blog-item text-center">
                            @if($post->photos->count() === 1)
                            <div class="blog-image">
                                <a href="{{ url($post->photos->first()->url) }}" class="example-image-link" data-lightbox="single" data-title="{{ $post->title }}">
                                    <img class="img-fluid example-image" src="{{ url($post->photos->first()->url) }}" alt="">
                                </a>
                            </div>
                            @elseif($post->photos->count() > 1)
                                <div class="blog-image">
                                    <a href="{{ url($post->photos->first()->url) }}" class="example-image-link" data-lightbox="single" data-title="{{ $post->title }}">
                                        <img class="img-fluid example-image" src="{{ url($post->photos->first()->url) }}" alt="">
                                    </a>
                                </div>
                            @elseif($post->iframe)
                                <div class="embed-responsive embed-responsive-16by9">
                                    {!! $post->iframe !!}
                                </div>d
                            @endif
                            <div><a href="noticia/{{ $post->url }}" class="btn btn-common">Leer más</a></div>
                            <div class="descr">
                                <h3 class="title">
                                    <a href="noticia/{{ $post->url }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p>
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                            <div class="blog-footer hide-on-list">
                                <div class="float-left">
                                    <p class="prop-user"><a href="#"><i class="lni-user"></i> {{ $post->owner->name }}</a></p>
                                </div>
                                <div class="float-right">
                                    <span><i class="fa fa-calendar"></i> {{ $post->published_at->format('M/d/Y') }}</span>
                                </div>
                            </div>
                        </div>


                </div>
                @endforeach
                <div class="col-12">
                    <div class="text-center">
                        <a href="{{ route('posts.index') }}" class="btn btn-common">Ver más Noticias</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection




