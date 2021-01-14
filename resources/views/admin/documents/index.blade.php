@extends('admin.layout')

@section('header')
    <h1>
        Documentos
        <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Documentos</li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Listado de Documentos</h3>
            <a href="{{ route('admin.documents.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Crear Nuevo
            </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="users-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Cover</th>
                    <th>Descripción</th>
                    <th>Archivo PDF</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($documents as $document)
                    <tr>
                        <td>{{ $document->title }}</td>
                        <td><a href="{{ url($document->cover) }}"><img src="{{ url($document->cover) }}" width="150px" alt=""></a></td>
                        <td>{{ $document->description }}</td>
                        <td><a href="{{ url($document->filename) }}">PDF</a></td>
                        <td>
                            <form method="POST"
                                  action="{{ route('admin.documents.destroy', $document) }}"
                                  style="display: inline;">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-xs"
                                        onclick="return confirm('Estas seguro de querer eliminar este documento')"><i class="fa fa-times"></i>
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
