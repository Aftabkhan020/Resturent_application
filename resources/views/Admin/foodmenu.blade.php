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
<h1>Add new food</h1>

<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Food title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="title">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="price">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="description">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Food Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

<div style="position: relative; top: 60px; right :-250px">

<h1>Food List</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($food1 as $food)
    <tr>
      <th scope="row">{{$food->id}}</th>
      <td>{{$food->id}}</td>
      <td>{{$food->title}}</td>
      <td>{{$food->price}}</td>
      <td><img src="{{asset('foodimage/'.$food->image)}}" alt=""></td>
      <td><button class="btn btn-danger"><a href="{{url('/deletefood',$food->id)}}">Delete Food</a></button></td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>
</div>







</div>







@include("Admin.adminscript");

  </body>
</html>









</body>

</html>