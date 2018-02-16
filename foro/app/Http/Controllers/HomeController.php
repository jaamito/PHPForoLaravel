<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentarios;
use App\User;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrayPost = Post::select()->orderBy('id', 'desc')->get();
        $countcoment = Comentarios::all();
        $contpost = Post::all();
        $contuser = User::all();
        return view('home', array('arrayPost'=>$arrayPost,'countcoment'=>$countcoment,'$cont'=>$countcoment,'$cont1'=>$contpost,'$cont2'=>$contuser));
    }

    public function show($id)
    {
        $arrayPost = Post::find($id);
        $arrayComentarios = Comentarios::select()->where('idPost', $id)->get();
        $countcoment = Post::select('comentarios')->count();
        return view('foro.show', array('id'=>$id, 'titulo'=>$arrayPost,'arrayComentarios'=>$arrayComentarios,'countcoment'=>$countcoment));

    }


    public function guardarComentario(Request $request) {
        //creamos object Post
    	//$comentarios = Comentarios::select('comentarios')->where('id', $request->input('idPost'))->count();
    	//$com = new Post();
    	//$com->comentarios = $comentarios + 1;
    	//$com->save();


        $coment= new Comentarios();
        //Si el campo esta vacio no crea post

            $coment->idUsuario = $request->input('idUsuario');
            $coment->idPost = $request->input('idPost');
            $coment->nombreUsuario = $request->input('nombreUsuario');
            $coment->texto = $request->input('texto');
            $coment->img = ("Proximamente...");
            $coment->save();
            return redirect('inicio/'.$request->input('idPost'));
    }

    public function buscar(Request $request){

        $buscar = $request->input('buscar');
        $arrayBusqueda = Tags::select()->where('name','LIKE','%'.$buscar.'%')->get();




    }
}
