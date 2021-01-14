@extends('layout')
@section('meta-title')
    Organigrama | Servicio Departamental de Salud Potosí
@endsection
@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>ORGANIGRAMA SEDES POTOSÍ GESTIÓN 2019</h2>
                <a href="{{ route('pages.index') }}"><i class="lni-home"></i> Inicio</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Institución</span>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Organigrama</span>
            </div>
        </div>
    </div>


    <section class="cid-rFcueGAATS" id="image2-1b">



        <figure class="mbr-figure">
            <div class="image-block" style="width: 100%;">
                <img src="{{ asset('assets/img/organigramas/organigrama-2019.svg') }}" alt="Sedes" title="">

            </div>
        </figure>
    </section>

@endsection