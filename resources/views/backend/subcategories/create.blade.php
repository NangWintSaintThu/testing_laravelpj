@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Subcategory Create From</h1>
          </div>
      </div>

    
    <form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
    
  </div>
  <label for="brand">Category</label>
  <select class="form-control form-control-md" id="inputBrand" name="category">
    <optgroup label="Choose Category">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </optgroup>
  </select>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" id="exampleInputPassword1" value="create">
  </div>
     
</div>
@endsection