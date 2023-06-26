<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontrol;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/home',[admincontrol::class,'dataget']);
 Route::get('/messeges',[admincontrol::class,'show']);
Route::view('/projects','project');
Route::view('/aboutus','aboutus');

// admin routes
Route::group(['middleware'=>"web"],function(){
Route::view('/address','admin.address');
Route::view('/index','admin.adminhome');
Route::view('/about','admin.about');
Route::view('/project','admin.project');
});

Route::get('/about',[admincontrol::class,'aboutgetadmin']);
Route::post('/about',[admincontrol::class,'about']);
Route::post('/address',[admincontrol::class,'addaddress']);
Route::get('/skservice',[admincontrol::class,'serviceget']);
// Route::post('/contect',[admincontrol::class,'addcontect']);
Route::get('/aboutus',[admincontrol::class,'aboutget']);
Route::get('/projects',[admincontrol::class,'projectget']);
Route::view('/slider','admin.slider');
Route::post('/slide',[admincontrol::class,'slider']);
Route::post('/project',[admincontrol::class,'addproject']);
Route::view('/services','admin.services');
Route::post('/services',[admincontrol::class,'servicesinsert']);
Route::post('/messege',[admincontrol::class,'messegeinsert']);
Route::get('/contect',[admincontrol::class,'contectget']);

// login work
Route::view('/register','admin.register');
Route::view('/adminpanel','admin.adminlogin');
Route::POST('/register',[admincontrol::class,'admininsert']);
Route::POST('/adminpanel',[admincontrol::class,'adminlogin']);
