@extends('layout')

@section('listardenunciar')
@if (Auth::check())

<div class="container">
    <div class="col-12">
        <div class="card-body">
                <form action="{{ route('denuncias.buscar2') }}" class="">
                    <div class="row">
                        <div class="col">
                            <p class="font-weight-bold mb-3 d-flex float-right" style="font-size: 35px;">
                                Buscar denuncia</p>                        
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
                                {{-- <span class="fa fa-user form-control-feedback"></span> --}}
                                <input type="search" name="buscar" class="form-control d-flex float-right"
                                placeholder="Ingresar código" style="width: 139px;" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <h2 class="text-center mb-5">Administrar denuncias</h2>
        
        <div class="col-md-10 mx-auto p-3 shadow mb-5">
            <table class="table">
                <thead class="bg-secondary text-light">
                    <tr>
                        <th scole="col">Código</th>
                        <th scole="col">Denuncia</th>
                        <th scole="col">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    @foreach ($denuncias as $denuncia)
                    @if (!$denuncia->leido)
                    <tr>
                        <td class="text-center">{{ $denuncia->id }}</td>
                        <td>{{ substr($denuncia->observacion, 0, 150) }}...</td>
                        <td>
                            <a href="{{ route('denuncias.show', ['denuncia' => $denuncia->id]) }}"
                                class="btn btn-success mr-1 w-100 d-block">Ver</a>
                            </td>
                        </tr>
                        @endif
                @endforeach
            </tbody>
        </table>
        <div class="col-12 mt-4 justify-content-center d-flex">
            {{ $denuncias->links() }}
        </div>
    </div>
    @endsection
@endif