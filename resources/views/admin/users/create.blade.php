@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos personales</h3>
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
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Roles
                            @include('admin.roles.checkboxes')
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Permisos</label>
                            @include('admin.permissions.checkboxes')
                        </div>
                        <span class="help-block">La contraseña generada es "123456" cambiarla en su proximo inicio de sesion</span>

                        <button class="btn btn-primary btn-block">Crear Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection