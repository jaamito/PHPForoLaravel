@extends('layouts.app')
<style type="text/css">
	.datos{
		position: absolute;
		margin-left: 52%;
		margin-bottom: 40%;
	}
	.anuncio2{
		position: absolute;
		margin-top: 20%;
		margin-left: 58%;
	}

</style>
@section('content')
<div class="anuncio2">
	<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=13&l=ur1&category=dvd&banner=0QQBCNHJEDC0PPVYAFG2&f=ifr&linkID=38b96dbeb308b4efeebc74bf315494a6&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
        <div class="col-md-6 col-lg-6" style="margin-left: 0.2%">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">PERFIL</h3>
            </div>
            <div class="panel-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://www.netmanager.cl/netmanager/wp-content/uploads/avatar-1-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 ">
                	<table class="table table-user-information">
                    	<tr>
                        	<td>Nombre:</td>
                        	<td>{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                        	<td>Dirección:</td>
                        	<td>{{Auth::user()->direccion}}</td>
                        </tr>
                        <tr>
                        	<td>Fecha de nacimiento:</td>
                        	<td>{{Auth::user()->edad}}</td>
                        </tr>
                      	<tr>
                        	<td>Email</td>
                        	<td><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></td>
                        </tr>
                        <tr>
                        	<td>Numero de telefono:</td>
                        	<td>{{Auth::user()->telefono}}</td>
                        </tr>
                      	<tr>
                        	<td>Fecha de creación:</td>
                        	<td>{{Auth::user()->created_at}}</td>
                      	</tr>
                  	</table>
                	<a href="{{ url('/inicio/verPerfil/editarPerfil') }}" class="btn btn-info btn-lg" style="background: green;">
          					<span class="glyphicon glyphicon-wrench"></span> Editar
        					</a>
        					<a href="{{ url('/inicio/verPerfil/confirmarDeleteUser') }}" class="btn btn-danger btn-lg" style="background: red;">
        						<span class="glyphicon glyphicon-fire"></span>Eliminar
        					</a>
									<a href="{{ url('/inicio/verPerfil/cambiarPass') }}" class="btn btn-info btn-lg" style="background: green;">
          					<span class="glyphicon glyphicon-wrench"></span> Cambiar Contraseña
        					</a>
                </div>
            </div>
           </div>
          </div>
         </div>
    <div class="datos">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">DATOS DEL FORO</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://unvex-sd.com/wp-content/uploads/2017/07/The-Event-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                      <tr>
                        <td>Comentarios realizados:</td>
                        <?php $comentariosHechos= 0; ?>
                        @foreach( $arrayComent as $key => $coment )
                        	@if(Auth::user()->id === $coment->idUsuario)
                        		<?php $comentariosHechos++; ?>
                        	@endif
                        @endforeach
                        <td>{{$comentariosHechos}}</td>
                      </tr>
                      <tr>
                        <td>Fecha del ultimo comentario escrito:</td>
                        <?php $fechComent = 0; ?>
                        @foreach( $arrayComent as $key => $coment )
                        	@if(Auth::user()->id === $coment->idUsuario)
                        		<?php $fechComent = $coment->created_at; ?>
                        	@endif
                        @endforeach
                        <td>{{$fechComent}}</td>
                      </tr>
                      <tr>
                        <td>Posts creados:</td>
                        <?php $postsHechos = 0; ?>
                        @foreach( $arrayPost as $key => $post )
                        	@if(Auth::user()->id === $post->idUsuario)
                        		<?php $postsHechos++; ?>
                        	@endif
                        @endforeach
                        <td>{{$postsHechos}}</td>
                      </tr>
                      <tr>
                        <td>Fecha del ultimo post creado:</td>
                        <?php $fechPost = 0; ?>
                        @foreach( $arrayPost as $key => $post )
                        	@if(Auth::user()->id === $post->idUsuario)
                        		<?php $fechPost = $post->created_at; ?>
                        	@endif
                        @endforeach
                        <td>{{$fechPost}}</td>
                      </tr>
                  </table>
                  </div>
                 </div>
                </div>
               </div>
              </div>
         <div class="col-md-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Post Creados por #{{Auth::user()->name}}</h3>
            </div>
            <div class="panel-body">
            <div class="row">
                <div class=" col-md-9 col-lg-9 ">
                	<table class="table table-user-information">
                    		<?php  $cont = 0; ?>
                    		<?php  $cont2 = 1; ?>
                    		@foreach( $arrayPost as $key => $post )
                    			@if(Auth::user()->id === $post->idUsuario)
                    				<?php $posit = $post->titulo; ?>
                    				<tr>
                    					<td>#{{$cont2}} Post:</td>
                    					<td>{{$posit}}</td>
                    				<?php $cont++; ?>
                    				<?php $cont2++; ?>
                    				</tr>
                    			@endif
                    		@endforeach
                  	</table>
                </div>
            </div>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Usuarios</h3>
            </div>
            <div class="panel-body">
            <div class="row">

                <div class=" col-md-9 col-lg-9 ">
                	<table class="table table-user-information">
                		@if("1" === Auth::user()->admin)
                    		<?php  $cont2 = 1; ?>
                    		<?php  $ad = 1; ?>
                    		@foreach( $arrayUser as $key => $use )
                    				<tr>
                    					<td>Usuario #{{$cont2}}</td>
                    					<td>{{$use->name}}</td>
                    					@if($use->admin === "1")
                    						<td>Administrador</td>
                    					@else
                    						<td>Usuario</td>
                    					@endif
                    					@if($use->ban === "1")
                    						<td><a href="{{ url('/inicio/banear/'. $use->id) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-fire"></span> Banear</a></td>
                    					@else
                    						<td><a href="{{ url('/inicio/banear/'. $use->id) }}" class="btn btn-info btn-sm" ><span class="glyphicon glyphicon-fire"></span> Quitar Ban</a></td>
                    					@endif
                    				<?php $cont2++; ?>
                    				</tr>
                    		@endforeach
                    	@else
                    		<tr>
                    			<H1 style="text-align: center; color: red;">NO ERES ADMIN!</H1>
                    		</tr>

                    	@endif
                  	</table>
                </div>
            </div>
           </div>
          </div>
         </div>
@endsection
