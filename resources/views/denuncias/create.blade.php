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
                    <textarea class="form-control" id="observacion" rows="3" 
                    placeholder="Información relevante respecto a la denuncia realizada" 
                    name="observacion"></textarea>
                </div>
                <div class="form-group">
                    <strong><label for="Descripción">Descripción del lugar</label></strong>
                    <textarea class="form-control" id="descripcion" rows="3"
                    placeholder="Especificar el lugar donde se detecto el producto señalado: ubicación, tipo de establecimiento, condiciones de almacenamiento, etc." 
                    name="descripcion"></textarea>
                </div>
                <div class="form-group">
                    <strong><label for="prueba">NOTA</label></strong>
                    <input 
                        id="imagen"
                        type="file"
                        class="form-control @error('imagen') isinvalid @enderror"
                        name="imagen"
                    />
                </div>
                <div>
                    <p class="h3">Datos del denunciante</p>
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col"><strong>Nombre</strong>
                                <input type="text" class="form-control" id="nombre" 
                                placeholder="Juan Perez" name="nombre" value="Juan Perez">
                            </div>
                            <div class="col"><strong>C.I.</strong>
                                <input type="text" class="form-control" id="ci" 
                                placeholder="8547963" name="ci" value="8547963">
                            </div>
                            <div class="w-100"></div>
                            <div class="col"><strong>Domicilio</strong>
                                <input type="text" class="form-control" id="direccion" 
                                placeholder="Calle Nro. XX" name="direccion" value="Calle Nro. XX">
                            </div>
                            <div class="col"><strong>Télefono</strong><input type="text" 
                                class="form-control" id="telefono" value="telefono" name="telefono"
                                    placeholder="77889944">
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
