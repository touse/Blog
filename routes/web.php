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



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//front
Route::get('/master','abccontroller@master');
Route::get('/','abccontroller@blog');
Route::get('/about','abccontroller@about');
Route::get('/contact','abccontroller@contact');
Route::get('/detail','abccontroller@detail');

//backed
// route::get('/dash',function(){
 
//    return view('backend.dash');
// });
Route::group(['middleware'=>'auth'],function(){

    Route::post('/dash','abccontroller@dash');
    Route::post('/cat','categoryControllerr@cat');
    Route::post('/addcat','categoryController@create');
});

