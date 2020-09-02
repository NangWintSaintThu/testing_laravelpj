@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category Edit From</h1>
          </div>
      </div>

    
    <form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{$subcategory->name}}">
  </div>
<div class="form-group">
  <div class="col-sm-10">
  <label for="brand">Category</label>
  <select class="form-control form-control-md" id="inputcategory" name="category">
    <optgroup label="Choose Category">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </optgroup>
  </select>
</div>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" id="exampleInputPassword1" value="Edit">
  </div>
  @endsection