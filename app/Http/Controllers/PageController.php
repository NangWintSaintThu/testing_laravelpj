<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
	public function mainfun()
	{
    	//$route=Route::current();
    	//dd($route);
    	$items=Item::all()->take(6);
		return view('main',compact('items'));
	}
	public function loginfun(){
		return view('login');
	}
	public function brandfun(){
		return view('brand');
	}
	public function profun($value=''){
		return view('pro');
	}
	public function registerfun($value='')
	{ 
		return view('register');
	}
	public function shopcartfun($value='')
	{ 
		return view('shopcart');
	}
	public function subcategoryfun($value='')
	{ 
		return view('subcategory');
	}
	public function itemfun($value='')
	{ 
		return view('item');
	}

}