@extends('layouts.app')
@section('content')
<div class="alert alert-success">
  <strong>¡Bien hecho!</strong> Post editado.
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ url('inicio') }}">Inicio</a></li>
</ul>
@endsection
