<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Comentarios;
use App\User;

class PostController extends Controller
{
    public function crear()
	{
		return view('foro.crearPost');
	}
    public function vertags(){
        $conTag = Tag::all();
        return view('foro.crearPost',array('arrayTags'=>$conTag));
	}

    //Crear Post
	public function guardarPost(Request $request) {
		//creamos object Post
        $post = new Post();
        //Si el campo esta vacio no crea post

        	$post->idUsuario = $request->input('idUsuario');
        	$post->nombreUsuario = $request->input('nombreUsuario');
            $post->titulo = $request->input('titulo');
            $post->texto = $request->input('texto');
            $post->idTag = $request->input('tag');
            $post->comentarios = 0;
            $post->img = ("Proximamente...");
            $post->save();
            $arrayPost = Post::select()->orderBy('id', 'desc')->get();
            $countcoment = Comentarios::all();
            $contpost = Post::all();
            $contuser = User::all();
            return view('home', array('arrayPost'=>$arrayPost,'countcoment'=>$countcoment,'$cont'=>$countcoment,'$cont1'=>$contpost,'$cont2'=>$contuser));
    }

}
