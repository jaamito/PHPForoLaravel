@extends('layouts.app')


@section('content')
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
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
      		<!--User--><!--Mensaje--> 
           <div id="chat" class="panel-body" style="text-align: left;"></div>            
        </div>
        </div>
	</div>
</div>

<div class="col-md-offset-2 col-md-8" style="text-align: right;">
	<div class="col-lg-13">
    <div class="input-group">
      <input type="text" name="mmensaje" id="mmensaje" class="form-control">
      <input type="hidden" name="iidUser" id="iidUser" value="{{Auth::user()->id}}" class="form-control">
      <input type="hidden" name="nnameUser" id="nnameUser" value="{{Auth::user()->name}}" class="form-control">
      <span class="input-group-btn">
        <input id="botonEnviar" type="submit" class="btn btn-primary send">Comentar</button>
      </span>
    </div>
  </div>
</div>

@endsection