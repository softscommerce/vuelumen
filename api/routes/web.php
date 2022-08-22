<?php
/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
//header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
//header("Access-Control-Allow-Headers:
// {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/users', function () use ($router) {
    return \App\Models\User::get();
});

Route::group([

    'prefix' => 'api',
//    'middleware' => 'api',

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('user-profile', 'AuthController@me');
    Route::get('get_users/{mobile}', 'AuthController@getUsers');


});



//user route section
@include ("user/service_profile.php");



// admin section route
@include ("admin/product.php");









Route::group([

    'prefix' => 'api'

], function ($router) {
    Route::post('get_users', 'TestController@index');



});
