@extends('layout')

@section('listardenunciar')
<h2 class="text-center mb-5">Administrar denuncias</h2>

<div class="col-md-10 mx-auto p-3 shadow">
    <table class="table">
        <thead class="bg-secondary text-light">
            <tr>
                <th scole="col">Código</th>
                <th scole="col">Observaciones</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach($denuncias as $denuncia)
            <tr>
                <td class="text-center">{{$denuncia->id}}</td>
                <td>{{ substr($denuncia->observacion, 0, 150) }}...</td>
                <td>
                    <eliminar-comunicado
                        comunicado-id={{$denuncia->id}}
                    ></eliminar-comunicado>                       
                    <a href="{{ route ('denuncias.show', ['denuncia' => $denuncia->id]) }}" class="btn btn-success mr-1 w-100 d-block">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $denuncias->links() }}
    </div>        
</div>
@endsection