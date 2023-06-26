<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Messege;
use App\Models\Project;
use App\Models\Address;
use App\Models\Admin;
use Session;
class Admincontrol extends Controller
{
    function about(Request $req){
$data=new About;
$data->email=$req->email;
$data->phone=$req->phone;
$data->office_timing=$req->time;
$data->save();
return redirect()->back();
    }
    // about
    function dataget(){
         $data=About::all();
         $data2=slider::all();
         $data3=Service::all();
         $data4=Project::all();
         return view("index",compact("data","data2","data3","data4"));
    }
    function projectget(){
        $data=About::all();
        $data4=Project::all();
        $data3=About::all();
        return view("project",compact("data","data4","data3"));
   }
   function serviceget(){
    $data=About::all();
    $data2=Service::all();
    $data3=About::all();
    $data4=About::all();
    return view("service",compact("data","data2","data3","data4"));
}
   function contectget(){
    $data=About::all();
    $data3=About::all();
    $data2=Address::all();
    
    return view("contect",compact("data","data2","data3"));
}
function aboutget(){
    $data=About::all();
    
    $data2=About::all();
    return view("aboutus",compact("data","data2"));
}

    
    // slider insert
    function slider(Request $request){
 $data=new Slider;
 $image=$request->img;
$imagename=time(). '.' .$image->getClientOriginalExtension();
$request->img->move('image',$imagename);
$data->image=$imagename;
$data->save();
return redirect()->back();
    }
    // insert services
    function servicesinsert(Request $req){
  $data=new Service;
  $data->service=$req->services;
$data->detail=$req->detail;
$data->save();
return redirect()->back();
    }
    // insert message
    function messegeinsert(Request $req){
        $data=new Messege;   
  $data->name=$req->name;
$data->brand=$req->brand;
$data->phone=$req->phone;
$data->message=$req->messege;
       $data->save();
       return redirect()->back();
           }

    // get message
    function show(){
        $food=Messege::all();
        return view("admin.messege",compact("food"));
  
      }
      function addproject(Request $request){
        $data=new Project;
        $image=$request->img;
       $imagename=time(). '.' .$image->getClientOriginalExtension();
       $request->img->move('image',$imagename);
       $data->image=$imagename;
       $data->save();
       return redirect()->back();
           }

           function addaddress(Request $req){
            $data=new Address;   
            $data->Address=$req->address;
          $data->email=$req->email;
         
                 $data->save();
                 return redirect()->back();

           }
        //    loginwork
        function admininsert(Request $req){
            $data=new Admin;
            $data->name=$req->name;
            $data->email=$req->email;
            $data->password=$req->password;
            $data->save();
            return redirect('/adminpanel');
        }
    
        function adminlogin(Request $request){
            $data=Admin::where('email',$request->email)->where('password',$request->password)->get()->toArray();
            if($data){
             $request->session()->put('user',$data[0]['id']);
             return redirect('/index');
            }else{
             session::flash('user','username passowrd not match');
           
             return redirect('/adminpanel')->withinput();
            }
     }
    //  adminside data get
    function aboutgetadmin(){
         $data=About::all();
         return view('admin.about',compact("data"));
    }
      
}
