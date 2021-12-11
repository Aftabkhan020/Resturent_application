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
    <div class="col-md-4">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>
          @if($data->usertype=="0")
          <button class="btn btn-danger"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></button>
          @else
          <button class="btn btn-primary">Not Allowed</button>
          @endif

      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

</div>











</div>







@include("Admin.adminscript");

  </body>
</html>









</body>

</html>