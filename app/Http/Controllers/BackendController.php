<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

class BackendController extends Controller
{
	public function dashboardfun()
	{
    	//$route=Route::current();
    	//dd($route);
		return view('backend.dashboard');
	}
}