@extends('layout')

@section('listardenunciar')

<div class="container col-9 bg-white p-3 shadow">
    <h1 class="text-center mb-4">Código de denuncia {{$denuncia->id}}</h1>

    {{-- <div class="">
    <img src="/storage/{{$comunicado->imagen}}" class="w-100" style="img.responsive: max-width: 100%; height: auto;">
    </div>

    <div class="receta-meta mt-3">
        <p>
            <span class="font-weigth-bold text-primary">Autor:</span>
            <a class="text-dark" href="{{ route('perfiles.show', ['perfil' => $comunicado->autor->id])}}">
            {{$comunicado->autor->name}}
            </a>
        </p>
    </div>

    <div class="receta-meta">
        <p>
            <span class="font-weigth-bold text-primary">Fecha:</span>
            @php
                $fecha = $comunicado->created_at
            @endphp

            <fecha-comunicado fecha="{{$fecha}}"></fecha-comunicado>
        </p>
    </div>

    <div class="container col-12">
        <h2 class="my-3 text-primary"> Comunicado</h2>
        {!! $comunicado->mensaje !!}
    </div> --}}

    <div class="py-1">
        <form method="POST" action="{{ route('denuncias.store')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-group">
                <strong><label for="Observaciones">Observaciones</label></strong>
                <li class="list-group-item text-justify">{{$denuncia->observacion}}</li>
            </div>
            <div class="form-group">
                <strong><label for="Descripción">Descripción del lugar</label></strong>
                <li class="list-group-item text-justify">{{$denuncia->descripcion}}</li>
            </div>
            <div class="form-group" class="align-content-center">
                <strong><label for="prueba">IMAGEN DE REFERENCIA</label></strong>
                <img src="/storage/{{$denuncia->nota}}"
                width="750" class="mx-auto d-block"/>
            </div>
            <div>
                <p class="h3">Datos del denunciante</p>
            </div>
            <div class="form-group">
                <div class="container">
                    <div class="row">
                        <div class="col"><strong>Nombre</strong>
                            <li class="list-group-item text-justify">{{$denuncia->nombre}}</li>
                        </div>
                        <div class="col"><strong>C.I.</strong>
                            <li class="list-group-item text-justify">{{$denuncia->ci}}</li>
                        </div>
                        <div class="w-100"></div>
                        <div class="col"><strong>Domicilio</strong>
                            <li class="list-group-item text-justify">{{$denuncia->domicilio}}</li>
                        </div>
                        <div class="col"><strong>Télefono</strong>
                            <li class="list-group-item text-justify">{{$denuncia->telefono}}</li>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection