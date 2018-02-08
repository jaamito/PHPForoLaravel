<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentarios;

class PerfilController extends Controller
{
    public function perfil()
    {
    	$arrayPost = Post::all();
        $arrayComent = Comentarios::all();
        return view('foro.perfil', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent));
    }
}
