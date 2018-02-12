@extends('layouts.app')
@section('content')
<div class="col-md-6 col-lg-6" style="margin-left: 0.2%">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">PERFIL</h3>
    </div>
    <div class="panel-body">
    <div class="row">
        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://www.netmanager.cl/netmanager/wp-content/uploads/avatar-1-300x300.png" class="img-circle img-responsive"> </div>
        <div class=" col-md-9 col-lg-9 ">
          <form action="{{ url('/inicio/verPerfil/editarPerfil') }}" method="POST">
            {{ csrf_field() }}
          <table class="table table-user-information">
              <tr>
                <td></td>
                <td><input type="hidden" name="id" value="{{ Auth::user()->id }}" id="nombreUsuario" class="form-control"></td>
              </tr>
              <tr>
                  <td>Nombre:</td>
                  <td><input type="text" name="name" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control"></td>
                </tr>
                <tr>
                  <td>Dirección:</td>
                  <td><input type="text" name="direccion" value="{{ Auth::user()->direccion }}" id="nombreUsuario" class="form-control"></td>
                </tr>
                <tr>
                  <td>Fecha de nacimiento:</td>
                  <td><input type="text" name="edad" value="{{ Auth::user()->edad }}" id="nombreUsuario" class="form-control"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="text" name="email" value="{{ Auth::user()->email }}" id="nombreUsuario" class="form-control"></td>
                </tr>
                <tr>
                  <td>Numero de telefono:</td>
                  <td><input type="text" name="telefono" value="{{ Auth::user()->telefono }}" id="nombreUsuario" class="form-control"></td>
                </tr>
                <tr>
                  <td>Fecha de creación:</td>
                  <td>{{Auth::user()->created_at}}</td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="hidden" name="password" value="{{ Auth::user()->password }}" id="nombreUsuario" class="form-control"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><button type="submit" class="btn btn-primary" style="min-height:0px;margin:0px 0 0px 0">Editar</button></td>
            </table>
          </form>
        </div>
    </div>
   </div>
  </div>
 </div>
@endsection
