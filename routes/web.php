<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello',function (){

return response("<h1>heellooo wwoorrldd 3rd route view</h1>",200);
});

Route::get('/posts/{id}',function ($id){
   // dd($id);
    ddd($id);//for debugging
return response('Post ' . $id);
})->where('id', '[0-9]+');


Route::get('/search', function(Request $request){
dd($request);
});