@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$titulo->titulo}}</h3></div>
            </div>
        </div>
        <div class="panel-body">
                   <a href="">
                        <p style="min-height:0px;margin:0px 0 0px 0">
                            Comentar
                        </p>
                    </a>
                </div>
    </div>

</div>

@endsection