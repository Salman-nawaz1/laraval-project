
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
    <div class="mt-2 ml-6"> 
   <table class="table">
    <thead>
    <tr> 
    <th class="text-white"> id </th>
        <th class="text-white"> name </th>
        <th class="text-white"> brand </th>
        <th class="text-white"> phone </th>
        <th class="text-white"> message </th>
</tr>
</thead>
<tbody>
@foreach($food as $food)
    <tr>
      <th class="text-white" scope="row">{{$food->id}}</th>
      <td  class="text-white">{{$food->name}}</td>
      <td class="text-white">{{$food->brand}}</td>
      <td class="text-white">{{$food->phone}}</td>
      <td class="text-white"> {{$food->message}}</td>
      
    </tr>
   @endforeach
</tbody>
</table>
     
      @include('admin.adminscript')               
  

</div>
</div>
  </body>
</html>
