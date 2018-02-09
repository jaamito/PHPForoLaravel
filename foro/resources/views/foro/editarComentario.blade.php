@extends('layouts.app')
@section('content')
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Editar Comentario
                </h3>
            </div>

        <div class="panel-body" style="padding:30px">
            <form action="{{ url('/inicio/comentario/' . $arrayComentarios->id ) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nombre usuario:</label>
                    <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                    <label for="texto">Comentario</label>
                    <textarea id="texto" name="texto" cols="44" class="form-control" required>{{$arrayComentarios->texto}}</textarea>
                    <!--<label>Id usuario:</label><label>Id Post:</label>-->
                    <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">
                    <input readonly="readonly" type="text" name="idPost" value="{{$arrayComentarios->idPost}}" id="id" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="min-height:0px;margin:0px 0 0px 0">
                        Editar
                    </button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
