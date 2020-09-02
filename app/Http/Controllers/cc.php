<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        //dd($items);
        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories =Category::all();
          return view('backend.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            
            "name"=>'required',

            "photo"=>'required'
        ]);
          $imageName =time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        $path ='backend/categoryimg/'.$imageName;
        //Data insert
        $category=new Category;
        $category->name=$request->name;
        $brand->photo=$path;
        $brand->save();

         return redirect()->route('brands.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands =Brand::all();
        return view('backend.brands.edit',compact('brands','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brand $brand)
    {
         $request->validate([
            
            "name"=>'required',

            "photo"=>'required',

            "oldphoto"=>'required'
        ]);
         if ($request->hasFile('photo')){
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/brandimg'),$imageName);
            $path='backend/brandimg/'.$imageName;
         }else{
            $path=$request->oldphoto;
         }
          $brand->name=$request->name;
           $brand->photo=$path;
           $brand->save();

         return redirect()->route('brands.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}