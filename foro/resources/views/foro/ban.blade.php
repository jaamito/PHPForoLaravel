@extends('layouts.app')

@section('content')
@if($user->ban === "1")
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Estas seguro que quieres Banear?
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">

                <form action="{{ url('inicio/banear/'. $id)}}" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <!--Nombre usuario-->
                        <label>Administrador:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        <!-- -->
                        <label>Usuario a banear:</label>
                        <input readonly="readonly" type="text" name="" value="{{$user->name}}" id="nombreUsuario" class="form-control">

                        <input readonly="readonly" type="hidden" name="banear" id="banear" class="form-control" value="0" >

                        <!--Id usuario-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{$id}}" id="idUsuario" class="form-control">

                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Banear
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@else
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Quitar el BANEO?
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">

                <form action="{{ url('inicio/banear/'. $id)}}" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <!--Nombre usuario-->
                        <label>Administrador:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        <!-- -->
                        <label>Usuario a banear:</label>
                        <input readonly="readonly" type="text" name="" value="{{$user->name}}" id="nombreUsuario" class="form-control">

                        <input readonly="readonly" type="hidden" name="banear" id="banear" class="form-control" value="1" >

                        <!--Id usuario-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{$id}}" id="idUsuario" class="form-control">

                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Quitar Ban
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endif
@endsection
