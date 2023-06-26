
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
    <div class="mt-2 ml-6"> 
    <form  method="POST" action="{{url('/project')}}" enctype= "multipart/form-data">
    @csrf
  
  
  <div class="form-group">
    <label for="img">phone</label>
    <input type="file" class="form-control text-white" name="img">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>

     
      @include('admin.adminscript')               
  

</div>
</div>
  </body>
</html>
