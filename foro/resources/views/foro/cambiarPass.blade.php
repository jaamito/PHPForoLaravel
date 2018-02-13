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
          <form action="{{ url('/inicio/verPerfil/cambiarPass') }}" method="POST">
            {{ csrf_field() }}
          <table class="table table-user-information">
                <tr>
                  <td></td>
                  <td><input type="hidden" name="id" value="{{ Auth::user()->id }}" id="nombreUsuario" class="form-control"></td>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </tr>
                <tr>
                  <td>Contraseña Antigua</td>
                  <td><input type="password" name="oldPassword" id="oldPassword" class="form-control"></td>
                </tr>
                <tr>
                  <td>Nueva Contraseña</td>
                  <td><input type="password" name="newPassword" id="newPassword" class="form-control"></td>
                </tr>
                <tr>
                  <td>Confirma Nueva Contraseña</td>
                  <td><input type="password" name="newPasswordConfirm" id="newPassword" class="form-control"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><button type="submit" class="btn btn-primary" style="min-height:0px;margin:0px 0 0px 0">Cambiar Contraseña</button></td>
            </table>
          </form>
        </div>
    </div>
   </div>
  </div>
 </div>
@endsection
