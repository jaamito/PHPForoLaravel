@extends('layouts.app')


@section('content')
<style type="text/css">
	div.ex3 {
    background-color: white;
    text-align: right;
    height: 250px;
    overflow: auto;
}
div.ex4 {
    background-color: white;
    text-align: right;
    height: 250px;
    overflow: auto;

}
</style>
<form action="{{ url('inicio/chat') }}" method="POST">
                
    {{ csrf_field() }}
<!--Usuarios-->
<div class="col-md-offset-0 col-md-2">
	<div class="panel panel-primary">
      	<div class="panel-heading">Chat Publico</div>
      	<div class="ex4">
      	@if($arrayUsers->count() < 0) {
      		<div class="panel-body" style="text-align: left;">No tienes amigos</div>
      	@else 
      		@foreach( $arrayUsers as $key => $user )
           		<div class="panel-body" style="text-align: left;">{{$user->name}}</div>                 
        	@endforeach
        @endif

        </div>
	</div>
</div>

<!--Mensajes-->
<div class="col-md-offset-0 col-md-8">
	<div class="panel panel-primary">
      	<div class="panel-heading">Usuarios</div>
      	<div class="ex3">
      	@foreach( $arrayMensajes as $key => $mensaje )
      		<!--User--><!--Mensaje--> 
           <div id="chat" class="panel-body" style="text-align: left;">{{$mensaje->userName}}: {{$mensaje->mensaje}}</div>            
        @endforeach
        </div>
        </div>
	</div>
</div>
<div class="col-md-offset-2 col-md-8" style="text-align: right;">
	<div class="col-lg-13">
    <div class="input-group">
      <input type="text" name="mensaje" id="mensaje" class="form-control">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-primary">Comentar</button>
      </span>
    </div>
  </div>
</div>
</form>

@endsection