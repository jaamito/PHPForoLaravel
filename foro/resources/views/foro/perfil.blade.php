@extends('layouts.app')
<style type="text/css">
	.anuncio{
		position: absolute;
		margin-left: 50%; 
	}
	.anuncio2{
		position: absolute;
		margin-left: 50%;
		margin-top: 20%; 
	}
</style>
@section('content')
<div class="anuncio">
	<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=12&l=ur1&category=apparel&banner=0BSSKQPXGC7SRHW2Q002&f=ifr&linkID=2fb4d41773fc71a677031848e5ec01a0&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
<div class="anuncio2">
	<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=12&l=ur1&category=electronica&banner=046J26ETS9M7NDGDASG2&f=ifr&linkID=57c9483ac4d39f3f1b7ba2081bb371db&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
 <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-left: -8%">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">PERFIL</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://www.netmanager.cl/netmanager/wp-content/uploads/avatar-1-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
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
                        <td>Numero de telefono:</td>
                        <td>{{Auth::user()->telefono}}</td>
                      </tr>

                      </tr>
                        <td>Fecha de creación:</td>
                        <td>{{Auth::user()->created_at}}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                	<a href="#" class="btn btn-info btn-lg" style="background: green;">
          				<span class="glyphicon glyphicon-wrench"></span> Editar
        			</a>
        			<a href="#" class="btn btn-info btn-lg" style="background: red;">
          				<span class="glyphicon glyphicon-fire"></span> Eliminar 
        			</a>
                </div>
              </div>
            </div>
             </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-left: -8%">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">DATOS DEL FORO</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://unvex-sd.com/wp-content/uploads/2017/07/The-Event-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
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
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
             </div>
        </div>
      </div>
    </div>
@endsection

