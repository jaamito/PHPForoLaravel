<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Añadir Post
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
            
                <form action="{{ url('inicio/crearPost') }}" method="POST">
                
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <!--Nombre usuario-->
                        <label>Nombre usuario:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        
                        <label for="titulo">Titulo del Post</label>
                        <!-- -->
                        <input type="text" name="titulo" id="titulo" class="form-control" required>

                        <label for="texto">Texto Principal del Post</label>
                        <!-- -->
                        <textarea id="texto" name="texto" cols="44" class="form-control" required></textarea></br>

                       <select id="tag" name="tag" class="selectpicker" data-live-search="true">
                            @foreach( $arrayTags as $key => $tag )
                                <option value="{{$tag->id}}">{{$tag->nombre}}</option>
                            @endforeach
                        </select>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
                        <!--Id usuario-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir Post
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--stop-->

