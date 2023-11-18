<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
	public function index(){
		$post = "Proyecto Nerdy Nest v0.1";
		return view('posts.index', ['post'=>$post]);
	}
}
