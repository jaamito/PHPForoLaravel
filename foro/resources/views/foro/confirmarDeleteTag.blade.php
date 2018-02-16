@extends('layouts.app')

@section('content')
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Quieres eliminar el tag?
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">

                <form action="{{ url('inicio/confirmDeleteTag/'.$infoEdit->id) }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <!--Nombre usuario-->
                        <label>Nombre usuario:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        <label for="titulo">Titulo del Tag</label>
                        <!-- -->
                        <input readonly="readonly" type="text" name="titulo" id="titulo" class="form-control" value="{{$infoEdit->nombre}}" required>
                        <!--Id usuario-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">
                    </div>
                    <div class="form-group text-center">
                      <ul class="nav nav-pills">
                        <form action="{{ url('inicio/confirmDeleteTag/'.$infoEdit->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                              Eliminar
                            </button>
                          </form>
                          <a href="{{ url('inicio') }}" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                            Inicio
                          </a>
                      </ul>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--stop-->
@endsection
