@extends('layout')

@section('listardenunciar')

<div class="container col-9 bg-white p-3 shadow mb-5">
    <p style="font-size: 30px;"class="text-center mb-4"><strong>CÓDIGO DE DENUNCIA {{$denuncia->id}}</strong></p>
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
                <strong><label for="prueba">IMÁGEN DE REFERENCIA</label></strong>
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