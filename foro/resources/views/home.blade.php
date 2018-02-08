@extends('layouts.app')
<style type="text/css">
    .anun{
        margin-left: 68%;
        position: absolute ;
    }
</style>
@section('content')
<div class="container" style="margin-right: 6%;">
<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=48&l=ur1&category=videojuegos&banner=1JVX92HQMR48DWVPVFR2&f=ifr&linkID=a7f282763f766ad18a43f0692af4a2a3&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
</br>
<div class="anun">
<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=11&l=ur1&category=apparel&banner=02FS0CH2WW0D6MZ346R2&f=ifr&linkID=8168b2dd59690c7472392e34891460a1&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="120" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
@foreach( $arrayPost as $key => $post )
@if("1" === Auth::user()->admin)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>{{$post->titulo}}</strong></h4><div style="text-align: right;">Creador: {{$post->nombreUsuario}}</div><div style="text-align: right;">{{$post->created_at}}</div></div>

                <div class="panel-body">
   					<p style="min-height:0px;margin:0px 0 0px 0">
                        <a  href="{{ url('/inicio/' . $post->id ) }}"><span class="glyphicon glyphicon-pencil"></span> Comentar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: green;" href="{{ url('/inicio/editar/' . $post->id ) }}"><span class="glyphicon glyphicon-wrench"></span> Editar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: red;" href="{{ url('/inicio/delete/' . $post->id ) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                        <?php $comentariosHechos= 0; ?>
                        @foreach( $countcoment as $key => $coment )
                            @if($post->id === $coment->idPost)
                                <?php $comentariosHechos++; ?>
                            @endif
                        @endforeach
                        <span class="glyphicon glyphicon-comment" style="margin-left: 55%"> {{$comentariosHechos}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>{{$post->titulo}}</strong></h4><div style="text-align: right;">Creador: {{$post->nombreUsuario}}</div><div style="text-align: right;">{{$post->created_at}}</div></div>
                <div class="panel-body">
                    <p style="min-height:0px;margin:0px 0 0px 0">
                        <a  href="{{ url('/inicio/' . $post->id ) }}"><span class="glyphicon glyphicon-pencil"></span> Comentar</a>&nbsp;&nbsp;&nbsp;
                        @if($post->idUsuario === Auth::user()->id)
                        <a style="color: green;" href="{{ url('/inicio/editar/' . $post->id ) }}"><span class="glyphicon glyphicon-wrench"></span> Editar</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: red;" href="{{ url('/inicio/delete/' . $post->id ) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
                    @endif
                    <?php $comentariosHechos= 0; ?>
                        @foreach( $countcoment as $key => $coment )
                            @if($post->id === $coment->idPost)
                                <?php $comentariosHechos++; ?>
                            @endif
                        @endforeach
                        <span class="glyphicon glyphicon-comment" style="margin-left: 90%"> {{$comentariosHechos}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
<div style="margin-left: 8.5%;">
<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=48&l=ur1&category=electronica&banner=1ZFFFVGD3JXYV7FSVA02&f=ifr&linkID=1149699128374dc54e764643f07afedd&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
@endsection
