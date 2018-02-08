<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function crear()
	{
		return view('foro.crearPost');
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
            $post->comentarios = 0;
            $post->img = ("Proximamente...");
            $post->save();
            return view('foro.bien');
    }
    
}
