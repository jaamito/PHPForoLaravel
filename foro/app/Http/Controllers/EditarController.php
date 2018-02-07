<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class EditarController extends Controller
{
    public function index(){
      return view('foro.editar');
    }
    public function getInfo($id)
    {
      $arrayPost = Post::find($id);
      return view('foro.editar', array('id'=>$id, 'infoEdit'=>$arrayPost));
    }
    public function update(){
      
    }
}
