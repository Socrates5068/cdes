@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Insertar Imagen</h3>
                </div>
                <div class="box-body">
                    @if($errors->any())
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger">
                                    {{'* '}}{{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <form method="POST" action="{{ route('admin.images.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Titulo:</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria:</label>
                            <select name="category" id="category" class="form-control">
                                <option value="all">Todos</option>
                                <option value="planning">Planificación</option>
                                <option value="hospital">Hospitales</option>
                                <option value="campaign">Campañas</option>
                                <option value="workshop">Talleres</option>
                                <option value="unit">Unidades</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="email">Imagen:</label>
                            <input type="file" name="filename" class="form-control" value="{{ old('filename') }}">
                        </div>


                        <span class="help-block">Las dimensiones recomendadas son </span>

                        <button class="btn btn-primary btn-block">Subir Imagen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection