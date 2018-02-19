<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\User;
use App\Post;
class TagController extends Controller
{
  public function crear()
  {
    return view('foro.crearTags');
  }
  public function guardarTag(Request $request) {
      $tag = new Tag();
      $tag->idUsuario = $request->input('idUsuario');
      $tag->nombre = $request->input('nombre');
      $tag->save();
      return redirect('inicio/verTags');

  }

 

  public function buscar(Request $request){

        $buscar = $request->input('buscar');
        $arrayTags = Tag::select()->where('nombre','LIKE','%'.$buscar.'%')->get();
        $contTag = Tag::all();
        $contuser = User::all();
        $contPost = Post::all();
        return view('foro.verTags', array('arrayTags'=>$arrayTags, 'cont1'=>$contTag,'cont2'=>$contuser,'contPost'=>$contPost));


    }

  public function delete($id) {

      $tag = Tag::find($id);

      $tag->delete();
      $arrayTags = Tag::select()->orderBy('id', 'desc')->get();
      return redirect('inicio/verTags');
  }
 
}
