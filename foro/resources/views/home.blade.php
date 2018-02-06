@extends('layouts.app')

@section('content')
@foreach( $arrayPost as $key => $post )
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>{{$post->titulo}}</strong></h4><div style="text-align: right;">Creador: {{$post->nombreUsuario}}</div></div>

                <div class="panel-body">
   					<p style="min-height:0px;margin:0px 0 0px 0">
                        <a  href="{{ url('/inicio/' . $post->id ) }}">Comentar&nbsp;&nbsp;&nbsp;</a>
                        <!-- //Esto para editar tus propios Post\\ <a style="color: green;" href="{{ url('/inicio/editar' . $post->id ) }}">Editar&nbsp;&nbsp;&nbsp;</a>
                        <a style="color: red;" href="{{ url('/inicio/' . $post->id ) }}">Eliminar</a>
                        -->
                    </p>
                    
                    
                </div>


            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
