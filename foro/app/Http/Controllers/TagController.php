<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\User;
class TagController extends Controller
{
  public function index()
  {
      $arrayTags = Tag::select()->orderBy('id', 'desc')->get();
      $contTag = Tag::all();
      $contuser = User::all();
      return view('foro.verTags', array('arrayTags'=>$arrayTags, '$cont1'=>$contTag,'$cont2'=>$contuser));
  }
  public function crear()
  {
    return view('foro.crearTags');
  }
  public function guardarTag(Request $request) {
      $tag = new Tag();
      $tag->idUsuario = $request->input('idUsuario');
      $tag->nombre = $request->input('nombre');
      $tag->save();
      return view('foro.bien');
  }
}
