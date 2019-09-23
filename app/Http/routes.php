<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => 'MyController@home',]);
   
Route::get('/user', [
	'uses' => 'UserController@index',]);
	
Route::get('/shop', [
	'uses' => 'ShopController@index',]);
Route::get('/product', [
	'uses' => 'ProductController@index',]);
	

Route::get('/home', function () {
    return 'home';
});

Route::get('/mytest/{id}', function ($id) {
    return 'mytest'.$id;
});

Route::get('test',[
   //'middleware' => 'f',
   'uses' => 'TestController@index',
]);

Route::resource('my','MyController');

Route::get('register',function(){
	
	return view('register');
});
Route::get('act_register',function(){
	
	return view('register');
});

Route::post('act_register',array('uses'=>'UserReg@add'));

Route::get('tt',function(){
	
	return view('test');
});

Route::get('tt2',function(){
	
	return view('test2');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/tasks', 'MyController@index');

Route::get('/add_admin_user',function(){
	return view('admin.users.register');
});
Route::post('add_admin_user',array('uses'=>'UserController@add'));


