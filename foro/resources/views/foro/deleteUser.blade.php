@extends('layouts.app')
@section('content')
<div class="alert alert-success">
  <strong>¡Bien hecho!</strong> Eliminado con exito.
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ url('inicio/perfil') }}">Volver al perfil</a></li>
</ul>
@endsection
