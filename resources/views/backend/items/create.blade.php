@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Create From</h1>
          </div>
      </div>

    
    <form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="form-group ">
    <label for="inputCodeno">Code No</label>
    <input type="number" class="form-control" id="codeno" name="codeno"><span class="text-danger">{{$error->first('codeno')}}</span>
    
  </div>
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
    <span class="text-danger">{{$error->first('name')}}</span>
  </div>
  <div class="form-group">
      		<label for="exampleFormControlFile1">Photo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
            <span class="text-danger">{{$error->first('photo')}}</span>
            </div>
            <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
    <span class="text-danger">{{$error->first('price')}}</span>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Discount</label>
    <input type="number" class="form-control" value="0" id="exampleInputPassword1"name="discount">
    <span class="text-danger">{{$error->first('discount')}}</span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
   <textarea name="description" class="form-control" ></textarea>
   <span class="text-danger">{{$error->first('description')}}</span>
  </div>
   <div class="form-group">
   	<label for="brand">Brand</label>
  <select class="form-control form-control-md" id="inputBrand" name="brand">
  	<optgroup label="Choose Brand">
  		@foreach($brands as $brand)
  		<option value="{{$brand->id}}">{{$brand->name}}</option>
  		@endforeach
  	</optgroup>
  </select>
</div>
<div class="form-group">
	<label for="subcategory">Subcategory</label>
  <select class="form-control form-control-md" id="inputBrand" name="subcategory">
  	<optgroup label="Choose Subcategory">
  		@foreach($subcategories as $subcategory)
  		<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
  		@endforeach
  	</optgroup>
  </select>
</div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" id="exampleInputPassword1" value="create">
  </div>
     
    </form>
@endsection