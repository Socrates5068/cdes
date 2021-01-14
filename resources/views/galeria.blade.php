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
                        <a class="filter active btn btn-common" data-filter="all">
                            Todo
                        </a>
                        <a class="filter btn btn-common" data-filter=".design">
                            Fotos Uno
                        </a>
                        <a class="filter btn btn-common" data-filter=".development">
                            Fotos Dos
                        </a>
                        <a class="filter btn btn-common" data-filter=".print">
                            Fotos Tres
                        </a>
                    </div>

                </div>
            </div>
            <div id="portfolio" class="row wow fadeInDown">
                <div class="col-md-6 col-sm-6 col-lg-3 mix development print">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-1.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-1.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix design print">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-2.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-2.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix development">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-3.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-3.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix development design">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-4.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-4.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix development">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-5.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-5.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix print design">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-6.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-6.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix print design">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-1.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-6.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-3 mix print design">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-2.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-6.jpg">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Título de Proyecto</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection