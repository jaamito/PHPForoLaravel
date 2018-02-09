<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;
use App\Post;
class ComentarioDeleteController extends Controller
{
  public function delete($id) {

      $post = Comentarios::find($id);

      $post->delete();
      $arrayPost = Post::select()->orderBy('id', 'desc')->get();
      $countcoment = Comentarios::all();
      return view('foro.delete', array('arrayPost'=>$arrayPost,'countcoment'=>$countcoment));
  }
  public function confirm($id){
    $arrayComentarios = Comentarios::find($id);
    return view('foro.deleteComentario', array('id'=>$id, 'arrayComentarios'=>$arrayComentarios));
  }
}
