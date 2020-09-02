@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Brand Edit From</h1>
          </div>
      </div>

    
    <form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{$brand->name}}">
    <span class="text-danger">{{$error->first('name')}}</span>
  </div>
  <div class="form-group">
      		<label for="exampleFormControlFile1">Photo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
            <img src="{{asset($brand->photo)}}" class="img-fluid w-5">
            <input type="hidden" name="oldphoto" value="{{$brand->photo}}">
            
            </div>
            
 
  
  
  <div class="form-group">
    <input type="submit" class="btn btn-primary" id="exampleInputPassword1" value="Update">
  </div>
     
    </form>
@endsection