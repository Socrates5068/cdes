@extends('layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endsection

@section('denuncias')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        
        if (document.querySelector('#dropzone')) {
            Dropzone.autoDiscover = false;
    
            const dropzone = new Dropzone('div#dropzone', {
                url: '/denimg/store',
                dictDefaultMessage: 'Sube hasta 10 Imágenes',
                maxFiles: 10,
                required: true,
                acceptedFiles: ".png, .jpg, .gif, .jpeg",
                addRemoveLinks: true,
                dictRemoveFile: "Eliminar Imagen",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                success: function(file, respuesta) {
                    // console.log(file);
                    console.log(respuesta);
                    //file.nombreServidor = respuesta.archivo;
                },
                sending: function(file, xhr, formData) {
                    formData.append('uuid', document.querySelector('#uuid').value )
                    // console.log('enviando');
                },
            });
        }
    })
    </script>
    <?php use Illuminate\Support\Str;
    ?>
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
                    <div id="dropzone" class="dropzone form-control"></div>
                </div>
                <input type="hidden" id="uuid" name="uuid" value="{{ Str::uuid()->toString() }}">
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js" integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA==" crossorigin="anonymous" defer></script>
@endsection
