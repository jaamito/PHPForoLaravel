@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar&nbsp;&nbsp;<span class="glyphicon glyphicon-list-alt"></span></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--Direccion-->
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Dirección</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--/Direccion-->

                        <!--Edad-->
                        <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label"><span class="glyphicon glyphicon-plus"></span>&nbsp;Edad</label>

                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control" name="edad" value="{{ old('edad') }}" required autofocus>

                                @if ($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--/Edad-->

                        <!--TLF-->
                        <div class="form-group{{ $errors->has('tlf') ? ' has-error' : '' }}">
                            <label for="tlf" class="col-md-4 control-label"><span class="glyphicon glyphicon-earphone"></span>&nbsp;TLF</label>

                            <div class="col-md-6">
                                <input id="tlf" type="text" class="form-control" name="tlf" value="{{ old('tlf') }}" required autofocus>

                                @if ($errors->has('tlf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tlf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--/TLF-->
                        <!--Admin-->
                        <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                            <label for="admin" class="col-md-4 control-label"><span class="glyphicon glyphicon-check"></span>&nbsp;Admin</label>

                            <div class="col-md-6">
                                <label for="admin" class="col-md-4 control-label"><input id="admin" type="radio" name="admin" value="1" >Si</label>
                                
                                <label for="admin" class="col-md-4 control-label"><input id="admin" type="radio"  name="admin" value="0" >No</label>
                                
                            </div>
                        </div>
                        <!--/Admin-->


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><span class="glyphicon glyphicon-envelope"></span>&nbsp;E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><span class="glyphicon glyphicon-eye-close"></span>&nbsp;Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"><span class="glyphicon glyphicon-eye-close"></span>&nbsp;Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
