@extends('layouts.app')


@section('content')
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
      		<!--User-->
      		<!--Mensaje--> 
           <div id="chat" class="panel-body msg-group center" style="text-align: left;"></div>            
        </div>
        </div>
	</div>
</div>
<div class="col-md-offset-2 col-md-8" style="text-align: right;">
	<div class="col-lg-13">
    <div class="input-group">
      <input id="input-box" class="form-control" rows="1" placeholder="Escribe...">
      <input type="hidden" name="iidUser" id="iidUser" value="{{Auth::user()->id}}" class="form-control">
      <input type="hidden" name="nnameUser" id="nnameUser" value="{{Auth::user()->name}}" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Comentar</button>
      </span>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>

    <script>
        class chat_control {
            constructor() {
                this.msg_list = $('.msg-group');
            }

            send_msg(name, msg) {
                this.msg_list.append(this.get_msg_html(name, msg, 'right'));
                this.scroll_to_bottom(); 
            }

            receive_msg(name, msg) {
                this.msg_list.append(this.get_msg_html(name, msg, 'left'));
                this.scroll_to_bottom(); 
            }

            get_msg_html(name, msg, side) {
                var msg_temple = `
                    <div class="card">
                         <div class="card-body">
                             <h6 class="card-subtitle mb-2 text-muted text-${side}">${name}</h6>
                             <p class="card-text float-${side}" name="mensaje">${msg}</p>
                         </div>
                    </div>
                    `;
                return msg_temple;
            }

            scroll_to_bottom() {
                this.msg_list.scrollTop(this.msg_list[0].scrollHeight);
            }
        }


        var chat = new chat_control();
        

        send_button = $('button') // get jquery element from html table name
        input_box = $('#input-box') // get jquery element from div id
        // also you could get it by $('.form-control') or $('textarea')

        function handle_msg(msg) {
            msg = msg.trim()
            msg = msg.replace(/(?:\r\n|\r|\n)/g, '<br>')
            return msg
        }

        function send_msg() {
            msg = handle_msg(input_box.val());
            if (msg != '') {
                chat.send_msg('{{Auth::user()->name}}', msg);
                input_box.val('');

            
                MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
            }
        }

        function box_key_pressing() {
            // control + enter was pressed
            if ((event.keyCode === 10 || event.keyCode === 13) && event.ctrlKey) {
                send_msg();
            }
            // esc was pressed
            if (event.keyCode === 27) {
                input_box.blur();
            }
        }

        send_button.on('click', send_msg.bind());
        input_box.on('keyup', box_key_pressing.bind());
    </script>

@endsection