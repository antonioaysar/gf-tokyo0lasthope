<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chat;

class PagesController extends Controller
{
    public function welcome(){
		return view('pages.welcome2');
	}
	
	public function rulebook(){
		return view('pages.rulebook');
	}
	
	public function world(){
		return view('pages.world');
	}
	
	public function administration(){
		return view('pages.administration');
	}
}
