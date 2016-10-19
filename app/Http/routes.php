<?php
ini_set('display_errors', 1);
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

Route::get('/', function () {
//    $trace = debug_backtrace();
////    var_dump($this);
////    Debugbar::info($this->app);
    return 'welcome';
});
Route::get('/test/{name}',  function($name){
    return facadetest::test($name);
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('post', 'PostController');

Route::controller('user','UserController');