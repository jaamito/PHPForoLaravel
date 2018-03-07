@extends('layouts.app')

@section('content')
<div class="col-md-offset-3 col-md-6">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<div class="alert alert-success">
  <strong>¡Bien hecho!</strong> Eliminado con exito.
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ url('inicio') }}">Inicio</a></li>
</ul>
</div>
@endsection