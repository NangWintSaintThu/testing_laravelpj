@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category Create From</h1>
          </div>
      </div>

    
    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
  </div>
  <div class="form-group">
          <label for="exampleFormControlFile1">Photo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
            </div>
            
  <div class="form-group">
    <input type="submit" class="btn btn-primary" id="exampleInputPassword1" value="create">
  </div>
     
    </form>
@endsection