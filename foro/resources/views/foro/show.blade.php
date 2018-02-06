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
    <a href="#">
        <p style="min-height:0px;margin:0px 0 0px 0">
            <button type="button" class="btn btn-primary btn-lg">Comentar</button>
        </p>
    </a>
</div></br>
@foreach( $arrayComentarios as $key => $coment )
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Comentario</strong></div>

                <div class="panel-body">
                    <p style="min-height:0px;margin:0px 0 0px 0">
                        {{$coment->texto}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach

@endsection