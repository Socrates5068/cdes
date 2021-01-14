@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Insertar Documento</h3>
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
                    <form method="POST" action="{{ route('admin.documents.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Titulo:</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="cover">Cover:</label>
                            <input type="file" name="cover" class="form-control" value="{{ old('cover') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" value="{{ old('description') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="filename">Archivo PDF:</label>
                            <input type="file" name="filename" class="form-control" value="{{ old('filename') }}">
                        </div>



                        <span class="help-block">Las dimensiones recomendadas son </span>

                        <button class="btn btn-primary btn-block">Subir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection