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

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix'=>'student'], function(){
//     Route::get();
// });

Route::get('/crud', 'UserController@index');
Route::get('/crud/delete/{id}', 'UserController@delete');
Route::get('crud/create','UserController@create');
Route::post('crud/add','UserController@insert');
Route::get('call-view', function(){
        $name = "abc";
        return view('View', compact('name'));
});

Route::get('test-controller', 'UserController@testRoute');
Route::get('blade-layout', function(){
    return view('view/layout');
});
Route::get('blade-index', function(){
    return view('view/index');
});
Route::post('');

