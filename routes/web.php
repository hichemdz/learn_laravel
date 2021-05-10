<?php

use Illuminate\Support\Facades\Route;

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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::match(['post','get'],'/login',function () {
  return  'login';
});


Route::any('/any/{id}',function (Request $re,$id) {

return 'method ' . $re->method() . ' id: ' . $id;

});

Route::get('/regex/{i}',function($i){
 

return $i;

})->where('i','[1-9]');

Route::get('/n/{id}',function($id){
  return $id;
})->whereNumber('id') ;

Route::get('/a/{id}',function($id){
  return $id;
})->whereAlpha('id') ;


Route::get('/an/{id}',function($id){
  return $id;
})->whereAlphaNumeric('id') ;



Route::get('/ui/{id}',function($id){
  return $id;
})->whereUuid('id') ;

Route::get('/g/{id}',function($id){
  return $id;
}) ;

