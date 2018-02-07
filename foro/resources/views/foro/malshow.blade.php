@extends('layouts.app')
@section('content')
<div class="alert alert-danger">
  <strong>¡Mal Mal!</strong> Te falta rellenar campos.
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ url('inicio') }}">Inicio</a></li>
</ul>
@endsection

