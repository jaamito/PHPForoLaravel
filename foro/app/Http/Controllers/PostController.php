<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
	{
		$arrayPost = Post::all();
		return view('home', array('arrayPost'=>$arrayPost));
	}
}
