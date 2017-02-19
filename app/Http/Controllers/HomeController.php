<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\District;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//     	$districts = District::all();
		$districts = District::where('position', 'Periferica')->get();
    	
//         return view('home');
    	return view('pages.map', compact('districts'));
    }
}
