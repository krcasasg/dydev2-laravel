@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col md-12">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table-responsive-md table-bordered table">
                    <thead>
                        <tr>
                            <th>foto</th>
                            <th>nombre</th>
                            <th>identificacion</th>
                            <th>rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>
                                    <img src="{{asset('images/logos/'.$usuario->USUARI_Foto______b)}}" alt="" class="img-thumbnail" width="100px">
                                </td>
                                <td>
                                    {{$usuario->USUARI_Nombre____b}}
                                </td>
                                <td>
                                    {{$usuario->USUARI_Identific_b}}
                                </td>
                                <td>
                                    {{$usuario->USUARI_Cargo_____b}}
                                </td>
                                <td>
                                    <a href="" class="btn btn-success">Ver</a>
                                    <a href="{{route('usuari.edit', $usuario)}}" class="btn btn-success">Editar</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal-{{$usuario->USUARI_ConsInte__b}}">
                                        Eliminar
                                    </button>
                                    <!-- modal -->
                                    <form action="{{ route('usuari.destroy', $usuario) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="modal" tabindex="-1" role="dialog" id="eliminarModal-{{$usuario->USUARI_ConsInte__b}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger text-white">
                                                        <h5 class="modal-title">Confirmación</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Confirma que desea eliminar al usuario {{$usuario->USUARI_Nombre____b }} {{$usuario->USUARI_ConsInte__b}}.</p>
                                                        <p class="text-uppercase text-center font-weight-bold">Esta acción es permanente.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-danger">Si</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
