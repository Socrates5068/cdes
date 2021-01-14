@extends('layout')
@section('meta-title')
    Galeria | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Galería</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Comunicación</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Galería</span>
            </div>
        </div>
    </div>


    <section id="portfolio-section" class="section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="controls text-center">
                       <!--  <a class="filter active btn btn-common" data-filter="all">
                            Todo
                        </a>-->
                        <a class="filter btn btn-common" data-filter=".planning">
                            Boletines Informativos
                        </a>
                        <a class="filter btn btn-common" data-filter=".hospital">
                            Hospitales
                        </a>
                        <a class="filter btn btn-common" data-filter=".campaign">
                            Campañas
                       </a>
                        <!-- <a class="filter btn btn-common" data-filter=".workshop">
                            Talleres
                        </a>
                        <a class="filter btn btn-common" data-filter=".unit">
                            Unidades
                        </a>-->
                    </div>

                </div>
            </div>
            <div id="portfolio" class="row wow fadeInDown">
                @foreach($images as $image)
                    <div class="col-md-6 col-sm-6 col-lg-3 mix {{ $image->category != 'all' ? $image->category : 'all' }}">       
                        <div class="portfolio-box">
                            <div class="img-thumb">
                                <img class="img-fluid" src="{{ $image->filename }}" alt="{{ $image->title }}">
                                <h2 align="center">{{ $image->title }}</h2>
                                
                            </div>
                            <div class="overlay-box text-center">
                                <a class="lightbox" href="{{ $image->filename }}">
                                    <i class="lni-zoom-in"></i>
                                </a>
                                <h3>{{ $image->title }}</h3>
                                
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection