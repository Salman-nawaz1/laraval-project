
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
    <div class="mt-2 ml-6"> 
    <form  method="POST" action="{{url('/services')}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">services</label>
    <input type="text"  class="form-control text-white" name="services">
  </div>
  
  
  <div class="mb-3">
  <label  class="form-label">detail</label>
  <textarea class="form-control text-white" rows="3" name="detail"> </textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

     
      @include('admin.adminscript')               
  

</div>
</div>
  </body>
</html>
