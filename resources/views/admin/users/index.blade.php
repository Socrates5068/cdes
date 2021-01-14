@extends('admin.layout')

@section('header')
    <h1>
        Usuarios
        <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuarios</li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Listado de usuarios</h3>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Crear Nuevo
            </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="users-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Roles</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->getRoleNames()->implode(', ') }}</td>
                        <td>
                            <a href="{{ route('admin.users.show', $user) }}"
                               target="_blank"
                               class="btn btn-default btn-xs"><i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.users.edit', $user) }}"
                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>
                            </a>
                            <form method="POST"
                                  action="{{ route('admin.users.destroy', $user) }}"
                                  style="display: inline;">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-xs"
                                        onclick="return confirm('Estas seguro de querer eliminar este usuario')"><i class="fa fa-times"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
<!-- DataTables -->
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#users-table').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

@endpush
