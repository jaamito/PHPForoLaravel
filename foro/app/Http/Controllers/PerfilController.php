<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comentarios;
use App\User;
class PerfilController extends Controller
{
    public function perfil()
    {
    	$arrayUser = User::all();
    	$arrayPost = Post::all();
      $arrayComent = Comentarios::all();
      return view('foro.perfil', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent,'arrayUser'=>$arrayUser));
    }
    public function editarP()
    {
    	$arrayUser = User::all();
    	$arrayPost = Post::all();
      $arrayComent = Comentarios::all();
      return view('foro.editarPerfil', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent,'arrayUser'=>$arrayUser));
    }
    public function update(Request $request){
        $user= User::find($request->input('id'));
        $user->id = $request->input('id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->direccion = $request->input('direccion');
        $user->edad = $request->input('edad');
        $user->telefono = $request->input('telefono');
        $user->password=$request->input('password');
        $user->save();
        return view('foro.bienEditar');
    }
    public function deleteUser(Request $request) {
        $user= User::find($request->input('id'));
        $user->delete();
        return view('foro.delete');
    }
    public function confirmUser(Request $request){
      $user= User::find($request->input('id'));
      return view('foro.confirmarDeleteUser', array('infoEdit'=>$user));
    }
    public function changeP(){
      return view('foro.cambiarPass');
    }
    public function updateP(Request $request){
      $password=$request->input('newPassword');
      $confirmPassword=$request->input('newPasswordConfirm');
      if($password===$confirmPassword){


        $user= User::find($request->input('id'));

        $user->password=$request->input('newPassword');
        $user->save();
        $arrayUser = User::all();
        $arrayPost = Post::all();
        $arrayComent = Comentarios::all();
        return view('foro.perfil', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent,'arrayUser'=>$arrayUser));

      }else{
        $arrayUser = User::all();
        $arrayPost = Post::all();
        $arrayComent = Comentarios::all();
        return view('foro.cambiarPass', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent,'arrayUser'=>$arrayUser));
      }
      $arrayUser = User::all();
      $arrayPost = Post::all();
      $arrayComent = Comentarios::all();
      return view('foro.perfil', array('arrayPost'=>$arrayPost,'arrayComent'=>$arrayComent,'arrayUser'=>$arrayUser));

    }
}
