@extends('backendtemplate')
@section('content')
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Category List</h1>
            <a href="{{route('categories.create')}}" class="btn btn-lg btn-primary" disabled>Add New</a>
          </div>
      

    <div class="row">
      <div class="col-md-12">
   <table class="table table-bordered">
<thead class="thead-dark">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Photo</th>
    <th>Action</th>

  </tr>
</thead>
<tbody>
  @php $i=1; @endphp
  @foreach($categories as $category)
  <tr>
    <td>{{$i++}}</td>
    <td>{{$category->name}}</td>
    <td><img src="{{asset($category->photo)}}" class="w-50"> 
    </td>
    <td>
      <a href="#" class="btn btn-primary">Detail</a>
      <a href="{{route('categories.edit',$category->id)}}" class="btn  btn-warning">Edit</a>
      <a href="#" class="btn btn-danger">Delete</a>
    </td>
  </tr>
  @endforeach
</tbody>
   </table>
 </div>
</div>
</div>

    
@endsection