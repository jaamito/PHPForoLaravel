@extends('layouts.app')

@section('content')
@foreach( $arrayPost as $key => $post )
@if("1" === Auth::user()->admin)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>{{$post->titulo}}</strong></h4><div style="text-align: right;">Creador: {{$post->nombreUsuario}}</div><div style="text-align: right;">{{$post->created_at}}</div></div>

                <div class="panel-body">
   					<p style="min-height:0px;margin:0px 0 0px 0">
                        <a  href="{{ url('/inicio/' . $post->id ) }}"><span class="glyphicon glyphicon-pencil"></span> Comentar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: green;" href="{{ url('/inicio/editar/' . $post->id ) }}"><span class="glyphicon glyphicon-wrench"></span> Editar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: red;" href="{{ url('/inicio/eliminar' . $post->id ) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>{{$post->titulo}}</strong></h4><div style="text-align: right;">Creador: {{$post->nombreUsuario}}</div><div style="text-align: right;">{{$post->created_at}}</div></div>

                <div class="panel-body">
                    <p style="min-height:0px;margin:0px 0 0px 0">
                        <a  href="{{ url('/inicio/' . $post->id ) }}"><span class="glyphicon glyphicon-pencil"></span> Comentar</a>&nbsp;&nbsp;&nbsp;
                        @if($post->idUsuario === Auth::user()->id)
                        <a style="color: green;" href="{{ url('/inicio/editar/' . $post->id ) }}"><span class="glyphicon glyphicon-wrench"></span> Editar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: red;" href="{{ url('/inicio/eliminar' . $post->id ) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                    @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection
