@extends('layout')
@section('meta-title')
    Documentos | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Documentos</h2>
                <a href="{{ route('pages.index') }}"><i class="index.html"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Institución</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Documentos</span>
            </div>
        </div>
    </div>


    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="row">
                @foreach($documents as $document)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team-item text-center">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ $document->cover }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icon-team">
                                        <li><a href="{{ $document->filename }}" target="_blank"><i class="lni lni-download" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">{{ $document->title }}</a></h3>
                            <p>{{ $document->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection