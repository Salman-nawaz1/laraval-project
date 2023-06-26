
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
    <div class="mt-2 ml-6"> 
    <form  method="POST" action="{{url('/address')}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">address</label>
    <input type="text"  class="form-control text-white" name="address">
  </div>
  
  
  <div class="mb-3">
  <label  class="form-label">email</label>
  <input type="email"  class="form-control text-white" name="email">
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

     
      @include('admin.adminscript')               
  

</div>
</div>
  </body>
</html>
