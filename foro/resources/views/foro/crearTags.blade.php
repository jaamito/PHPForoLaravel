@extends('layouts.app')

@section('content')
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Añadir Tag
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">

                <form action="{{ url('inicio/crearPost') }}" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <!--Nombre usuario-->
                        <label>Nombre usuario:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">

                        <label for="titulo">Tag</label>
                        <!-- -->
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                        <!--Id usuario-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">

                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir Post
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--stop-->
@endsection
