<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'aaaa';
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*登录*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['web', 'auth']], function ($router) {
    $router->get('/', 'IndexController@index');
    $router->get('/ajaxindex', 'IndexController@ajaxIndex');

    require(__DIR__ . '/Routes/UserRoute.php');
    //权限
    require(__DIR__ . '/Routes/PermissionRoute.php');
});