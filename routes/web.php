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

Route::get("/vue", function () {
    return view('vue');
});

Route::get("/", function (){
    return view('index');
});

Route::get("/login", 'Auth\LoginController@showLoginForm')->name('login');

Route::post("/login", 'Auth\LoginController@login');

Route::get("/logout", 'Auth\LoginController@logout')->name('logout');

Route::get("/user", 'UserController@userHome')->middleware('auth')->name('user');

Route::get("/project", function (){
    return view('project');
});

Route::get("/apply", function (){
    return view('apply');
});

Route::get("/team", 'TeamController@index')->middleware('auth');

Route::post("/team", 'TeamController@create')->middleware('auth');



Route::get("/p_detail", function (){
    return view('p_detail');
});

Route::get('/u_info/{id}', 'IndexController@getinfo');
Route::get('/mail', 'IndexController@mailTest');

