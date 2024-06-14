<?php

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::group(['middleware' => ['guest']], function () {
  Route::get("/" , "PageController@login")->name('login');
  Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {
Route::get("/logout", "AuthController@ceklogout");
Route::get("/user", "PageController@edituser");
Route::post("/updateuser", "PageController@updateuser");
Route::get("/home" , "PageController@Home");
Route::get("/tiket", "PageController@tiket");
Route::get("/tiket/form-add", "PageController@addTiket");
Route::post("/save",  "PageController@savetiket");
Route::get("/about" , "PageController@about");
Route::get("/faq" , "PageController@faq");
Route::get("/form-edit/{id}", "PageController@edittiket");
Route::put("/update/{id}", "PageController@updatetiket");
Route::get("/delete/{id}", "PageController@deletetiket");
});
