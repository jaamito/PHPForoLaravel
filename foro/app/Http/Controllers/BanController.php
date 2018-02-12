<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comentarios;
class BanController extends Controller
{

	public function indexBan(){
      return view('foro.ban');
    }
    public function infoBan($id)
    {
      $arrayUser = User::find($id);
      return view('foro.ban', array('id'=>$id, 'user'=>$arrayUser));
    }
   public function updateban(Request $request, $id){
      $banner= User::find($id);
      $banner->ban = $request->input('banear');
      $banner->save();
      $arrayUser = User::all();
      $arrayPost = Post::all();
      $arrayComent = Comentarios::all();
      return view('foro.perfil', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent,'arrayUser'=>$arrayUser));
    }

}
