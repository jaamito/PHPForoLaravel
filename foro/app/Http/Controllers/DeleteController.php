<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentarios;
class DeleteController extends Controller
{
    public function delete($id) {

        $post = Post::find($id);

        $post->delete();
        $arrayPost = Post::select()->orderBy('id', 'desc')->get();
        $countcoment = Comentarios::all();
        return redirect('/inicio');
    }
    public function confirm($id){
      $arrayPost = Post::find($id);
      return view('foro.confirmarDelete', array('id'=>$id, 'infoEdit'=>$arrayPost));
    }

}
