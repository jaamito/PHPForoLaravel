@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$titulo->titulo}}</h3></div>

                <div class="panel-body">
                    <p style="min-height:0px;margin:0px 0 0px 0">
                       {{$titulo->texto}}
                    </p> 
                </div>
            </div>
        </div>
    </div>
</div></br>
@if("1" === Auth::user()->admin)
@foreach( $arrayComentarios as $key => $coment )
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Comentario de {{$coment->nombreUsuario}}</strong><div style="text-align: right;">{{$coment->created_at}}</div></div>

                <div class="panel-body">
                    <p style="min-height:0px;margin:0px 0 0px 0">
                        {{$coment->texto}}
                    </p></br>
                        <a style="color: green;" href="{{ url('/inicio/editar/' . $titulo->id ) }}"><span class="glyphicon glyphicon-wrench"></span> Editar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: red;" href="{{ url('/inicio/eliminar' . $titulo->id ) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-1 col-md-8">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Añadir Comentario
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
            
                <form action="{{ url('/inicio/' . $titulo->id ) }}" method="POST">
                
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label>Nombre usuario:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        <label for="texto">Comentario</label>
                        <textarea id="texto" name="texto" cols="44" class="form-control" required></textarea>
                        <!--<label>Id usuario:</label><label>Id Post:</label>-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">
                        <input readonly="readonly" type="hidden" name="idPost" value="{{$titulo->id}}" id="id" class="form-control">
                    
                    
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="min-height:0px;margin:0px 0 0px 0">
                            Comentar 
                        </button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>


@else
@foreach( $arrayComentarios as $key => $coment )
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Comentario de {{$coment->nombreUsuario}}</strong><div style="text-align: right;">{{$coment->created_at}}</div></div>

                <div class="panel-body">
                    <p style="min-height:0px;margin:0px 0 0px 0">
                        {{$coment->texto}}
                    </p></br>
                    @if($coment->idUsuario === Auth::user()->id)
                    	<a style="color: green;" href="{{ url('/inicio/editar/' . $titulo->id ) }}"><span class="glyphicon glyphicon-wrench"></span> Editar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: red;" href="{{ url('/inicio/eliminar' . $titulo->id ) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-1 col-md-8">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Añadir Comentario
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
            
                <form action="{{ url('/inicio/' . $titulo->id ) }}" method="POST">
                
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label>Nombre usuario:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        <label for="texto">Comentario</label>
                        <textarea id="texto" name="texto" cols="44" class="form-control" required></textarea>
                        <!--<label>Id usuario:</label><label>Id Post:</label>-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">
                        <input readonly="readonly" type="hidden" name="idPost" value="{{$titulo->id}}" id="id" class="form-control">
                    
                    
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="min-height:0px;margin:0px 0 0px 0">
                            Comentar 
                        </button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>
@endif
@endsection