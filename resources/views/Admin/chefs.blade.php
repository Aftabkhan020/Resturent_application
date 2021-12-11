<!DOCTYPE html>
<html>
<head>
<title>ACTIVE USERS</title>
</head>

<body>

<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    

  @include("Admin.admincss");


  </head>


  <body>

  <div class="container-scroller">
   
       



@include("Admin.navbar");

<div style="position: relative; top: 60px; right :-150px">
<h1>Add new chef</h1>

<form action="{{url('/uploadChef')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Food title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="Roll">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Food Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

<div style="position: relative; top: 60px; right :-250px">

<h1>Chef List</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $data)
    <tr>
      <th scope="row">{{($data->id)}}</th>
      <td>{{$data->Name}}</td>
      <td>{{$data->Roll}}</td>
      <td><img src="{{asset('Chefimage/'.$data->image)}}"></td>
      <td><button class="btn btn-danger"><a href="">Delete</a></button></td>
      @endforeach
    </tr>
    
   
    
  </tbody>
</table>
</div>







</div>







@include("Admin.adminscript");

  </body>
</html>









</body>

</html>