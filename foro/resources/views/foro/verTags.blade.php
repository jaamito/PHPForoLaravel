@extends('layouts.app')
<style type="text/css">
    .anun{
        margin-left: 68%;
        position: absolute ;
    }
    .contador{
        position: absolute;
        margin-left: 80%;
    }
</style>
@section('content')

</br>
<div class="anun">
  <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=11&l=ur1&category=apparel&banner=02FS0CH2WW0D6MZ346R2&f=ifr&linkID=8168b2dd59690c7472392e34891460a1&t=ianlopezzam03-21&tracking_id=ianlopezzam03-21" width="120" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>

@if("1" === Auth::user()->admin)
<div class="container">
<form class="navbar-form navbar-left" role="search" action="{{ url('/inicio/verTags/') }}" method="POST">
	{{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar Tag" required>
        </div>
            <button type="submit" class="btn btn-default">Buscar</button>
      </form>
</div>
      <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
              <table class="table table-user-information" style="text-align: center;">
                <tr>
                  <td>Nombre</td>
                  <td>Creador</td>
                  <td>Fecha Creacion</td>
                  <td>Numero de Post</td>
                  <td>Eliminar</td>
                </tr>
                @foreach( $arrayTags as $key => $tag )
                  @if(Auth::user()->id === $tag->idUsuario)
                    <tr>
                      <td>{{$tag->nombre}}</td>
                      <td>{{Auth::user()->name}}</td>
                      <td>{{$tag->created_at}}</td>
                      <td>1</td>
                      <td><a style="color: red;" href="{{ url('/inicio/confirmDeleteTag/'.$tag->id) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a></td>
                    </tr>
                  @endif
                @endforeach
              </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
              <table class="table table-user-information">
                <tr>
                  <td>Nombre</td>
                  <td>Creador</td>
                  <td>Fecha Creacion</td>
                  <td>Numero de Post</td>
                  <td>Eliminar</td>
                </tr>
                @foreach( $arrayTags as $key => $tag )
                  @if(Auth::user()->id === $tag->idUsuario)
                    <tr>
                      <td>{{$tag->nombre}}</td>
                      <td>{{Auth::user()->name}}</td>
                      <td>{{$tag->created_at}}</td>
                      <td>1</td>
                      <td><a style="color: red;" href="{{ url('/inicio/confirmDeleteTag/'.$tag->id) }}"><span class="glyphicon glyphicon-remove"></span> Eliminar</a></td>
                    </tr>
                  @endif
                @endforeach
              </table>
            </div>
        </div>
    </div>
</div>
@endif

@endsection
