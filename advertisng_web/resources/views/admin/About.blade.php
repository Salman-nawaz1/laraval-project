
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
    <div class="mt-2 ml-6"> 
    <form  method="POST" action="{{url('/about')}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">email</label>
    <input type="email"  class="form-control text-white" name="email">
  </div>
  
  <div class="form-group">
    <label for="img">phone</label>
    <input type="number" class="form-control text-white" name="phone">
  </div>
  <div class="mb-3">
  <label  class="form-label">timeing</label>
  <textarea class="form-control text-white" rows="3" name="time"> </textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <table class="table" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">office_timing</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->office_timing}}</td>
      
    
        <td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white"  href=""> Edit </a> </button></td>
   
    </tr>
   @endforeach
  </tbody>
</table>
</div>
     
      @include('admin.adminscript')               
  

</div>
</div>
  </body>
</html>
