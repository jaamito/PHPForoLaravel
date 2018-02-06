<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentarios;

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
        $arrayPost = Post::all();
        return view('home', array('arrayPost'=>$arrayPost));
    }

    public function show($id)
    {
        $arrayPost = Post::find($id);
        $arrayComentarios = Comentarios::select()->where('idPost', $id)->get();
        return view('foro.show', array('id'=>$id, 'titulo'=>$arrayPost,'arrayComentarios'=>$arrayComentarios));
        
    }
}
