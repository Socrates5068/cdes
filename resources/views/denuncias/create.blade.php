@extends('layout')

@section('denuncias')
    <div class="container">
        <div class="py-5 text-center">
            <p class="h2">FORMULARIO DE QUEJAS Y DENUNCIAS SOBRE AGIO Y ESPECULACIÓN DE PRECIOS
                Y MEDICAMENTOS
            </p>
        </div>

        <div class="py-1">
            <form method="POST" action="{{ route('denuncias.store')}}" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="form-group">
                    <strong><label for="Observaciones">Observaciones</label></strong>
                    <textarea class="form-control @error('observacion') is-invalid @enderror" 
                    id="observacion" rows="5" 
                    type="text"
                    name="observacion"
                    placeholder="Información relevante respecto a la denuncia realizada">{{ old('observacion') }}</textarea>

                    @error('observacion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <strong><label for="Descripción">Descripción del lugar</label></strong>
                    <textarea class="form-control @error('descripcion') is-invalid @enderror" 
                    id="descripcion" rows="3"
                    placeholder="Especificar el lugar donde se detecto el producto señalado: ubicación, tipo de establecimiento, condiciones de almacenamiento, etc." 
                    name="descripcion">{{ old('descripcion') }}</textarea>

                    @error('descripcion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <strong><label for="prueba">IMAGEN DE REFERENCIA</label></strong>
                    <input 
                        id="imagen"
                        type="file"
                        class="form-control @error('imagen') isinvalid @enderror"
                        name="imagen"
                    />
                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <p class="h3">Datos del denunciante</p>
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col"><strong>Nombre</strong>
                                <input type="text" id="nombre" 
                                class="form-control @error('nombre') isinvalid @enderror" 
                                placeholder="ej. Juan Perez" name="nombre" value="{{ old('nombre') }}">

                                @error('nombre')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col"><strong>C.I.</strong>
                                <input type="text" class="form-control @error('ci') isinvalid @enderror" 
                                id="ci" 
                                placeholder="ej. 8547963" name="ci" value="{{ old('ci') }}">

                                @error('ci')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="w-100"></div>
                            <div class="col"><strong>Domicilio</strong>
                                <input type="text" class="form-control @error('domicilio') isinvalid @enderror" 
                                id="domicilio" 
                                placeholder="ej. Calle o Av. Nro. XX" name="domicilio" value="{{ old('domicilio') }}">

                                @error('domicilio')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col"><strong>Teléfono</strong>
                                <input type="text" class="form-control @error('telefono') isinvalid @enderror" 
                                id="telefono" name="telefono" 
                                placeholder="ej. 778899XX" value="{{ old('telefono') }}">

                                @error('telefono')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group py-5 text-center">
                    <h5 class="mt-3">Firma del denunciante</h5>
                </div>
                <div class="form-group text-center">
                    <hr noshade="noshade" width=300 />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Generar formulario de denuncia</button>
                </div>
            </form>
        </div>
        
    </div>
@endsection
