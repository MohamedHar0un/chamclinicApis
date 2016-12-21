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

$api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});

$api->version('v1', function ($api) {
	$api->get('hello', 'App\Http\Controllers\HomeController@index');
	//get user by id
	$api->get('users/{user_id}', 'App\Http\Controllers\HomeController@getUser');
	//Give the user a permission
	$api->get('users/{user_id}/roles/{role_name}', 'App\Http\Controllers\HomeController@attachUserRole');
	//user authentication
	$api->get('users/auth/{user_name}/{role_password}/', 'App\Http\Controllers\HomeController@userAuth');
	//user registration
	$api->get('users/reg/{firstName}/{lastName}/{userName}/{userEmail}/{userMobile}/{userPassword}/', 'App\Http\Controllers\HomeController@userReg');
	//doctors
	$api->get('doctors/', 'App\Http\Controllers\HomeController@doctors');
	//Offers
	$api->get('offers/', 'App\Http\Controllers\HomeController@offers');
	//Services
	$api->get('teethservice/', 'App\Http\Controllers\HomeController@teethServices');
	$api->get('laserskinservice/', 'App\Http\Controllers\HomeController@laserSkinServices');
});
