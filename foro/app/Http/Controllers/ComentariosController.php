<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentarios;
class ComentariosController extends Controller
{
  public function getComent($id){
    $arrayComentarios = Comentarios::find($id);
    return view('foro.editarComentario', array('id'=>$id,'arrayComentarios'=>$arrayComentarios));
  }
  public function update(Request $request, $id){
    $countcoment = Post::select('comentarios')->count();
    $comentario= Comentarios::find($id);
    $comentario->texto = $request->input('texto');
    $comentario->save();
    $arrayPost = Post::find($comentario->idPost);
    $arrayComentarios = Comentarios::select()->where('idPost', $comentario->idPost )->get();
    return view('foro.show', array('id'=>$id, 'titulo'=>$arrayPost,'arrayComentarios'=>$arrayComentarios,'countcoment'=>$countcoment) );
  }
}
