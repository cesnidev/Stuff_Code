<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;

class HomeController extends Controller
{
    public function index(){
		return view('index');
	}
	public function Login(Request $request){
		$encriptado = Crypt::encrypt($request->input('password'));
		return "Loading...";
	}
	public function hi(){
		return "hola hi amigos";
	}
}
