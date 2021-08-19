@extends('layouts.admin')
@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            @if($message = Session::get('fail'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> Algo esta mal<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{route('usuari.update', $usuario)}}" method="post" enctype='multipart/form-data' id="form-usuari">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="USUARI_Nombre____b">Nombre</label>
                        <input type="text" name="USUARI_Nombre____b" id="USUARI_Nombre____b" class="form-control" required value="{{$usuario->USUARI_Nombre____b ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="USUARI_Correo___b">Correo</label>
                        <input type="email" name="USUARI_Correo___b" id="USUARI_Correo___b" class="form-control" required value="{{$usuario->USUARI_Correo___b ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="USUARI_Identific_b">Identificación</label>
                        <input type="text" name="USUARI_Identific_b" id="USUARI_Identific_b" class="form-control" required value="{{$usuario->USUARI_Identific_b ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="USUARI_Clave_____b">Clave</label>
                        <input type="text" name="USUARI_Clave_____b" id="USUARI_Clave_____b" class="form-control" required value="{{$usuario->USUARI_Clave_____b ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="foto_upload">Foto</label>
                        <input type="file" name="foto_upload" id="foto_upload" class="input-sm" required value="{{$usuario->USUARI_Foto______b ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="USUARI_Cargo_____b">Rol</label>
                        <select name="USUARI_Cargo_____b" id="USUARI_Cargo_____b" class="form-control" required>
                            <option value="">Seleccione</option>
                            <option value="agente" @if($usuario->USUARI_Cargo_____b == 'agente') selected @endif>Agente</option>
                            <option value="supervisor" @if($usuario->USUARI_Cargo_____b == 'supervisor') selected @endif>Supervisor</option>
                            <option value="administrador" @if($usuario->USUARI_Cargo_____b == 'administrador') selected @endif>Administrador</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="solo-agente">
                    <div class="col-md-12">
                        <p>Lunes</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniLun_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniLun_b" id="USUARI_HorIniLun_b" class="form-control" value="{{$usuario->USUARI_HorIniLun_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinLun_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinLun_b" id="USUARI_HorFinLun_b" class="form-control" value="{{$usuario->USUARI_HorFinLun_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>martes</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniMar_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniMar_b" id="USUARI_HorIniMar_b" class="form-control" value="{{$usuario->USUARI_HorIniMar_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinMar_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinMar_b" id="USUARI_HorFinMar_b" class="form-control" value="{{$usuario->USUARI_HorFinMar_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>Miercoles</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniMie_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniMie_b" id="USUARI_HorIniMie_b" class="form-control" value="{{$usuario->USUARI_HorIniMie_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinMie_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinMie_b" id="USUARI_HorFinMie_b" class="form-control" value="{{$usuario->USUARI_HorFinMie_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>Jueves</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniJue_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniJue_b" id="USUARI_HorIniJue_b" class="form-control" value="{{$usuario->USUARI_HorIniJue_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinJue_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinJue_b" id="USUARI_HorFinJue_b" class="form-control" value="{{$usuario->USUARI_HorFinJue_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>Viernes</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniVie_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniVie_b" id="USUARI_HorIniVie_b" class="form-control" value="{{$usuario->USUARI_HorIniVie_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinVie_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinVie_b" id="USUARI_HorFinVie_b" class="form-control"  value="{{$usuario->USUARI_HorFinVie_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>Sabado</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniSab_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniSab_b" id="USUARI_HorIniSab_b" class="form-control" value="{{$usuario->USUARI_HorIniSab_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinSab_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinSab_b" id="USUARI_HorFinSab_b" class="form-control" value="{{$usuario->USUARI_HorFinSab_b ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>Domingo</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniDom_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniDom_b" id="USUARI_HorIniDom_b" class="form-control" value="{{$usuario->USUARI_HorIniDom_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinDom_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinDom_b" id="USUARI_HorFinDom_b" class="form-control" value="{{$usuario->USUARI_HorFinDom_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="text-bold">Festivo</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorIniFes_b">Horario inicio</label>
                            <input type="time" name="USUARI_HorIniFes_b" id="USUARI_HorIniFes_b" class="form-control" value="{{$usuario->USUARI_HorIniFes_b ?? ''}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="USUARI_HorFinFes_b">Horario fin</label>
                            <input type="time" name="USUARI_HorFinFes_b" id="USUARI_HorFinFes_b" class="form-control" value="{{$usuario->USUARI_HorFinFes_b ?? ''}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Enviar" class="btn btn-default">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
