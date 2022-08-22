<?php
/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::group([

    'prefix' => 'api'

], function ($router) {
    Route::get('search_filter', 'User\SearchFilterController@searchFilter');


});
//'middleware' => 'auth'
Route::group([  'prefix' => 'api' ], function () {
    Route::get('create_service_profile', 'User\ServiceProfileController@makeServiceProfile');
    Route::get('user/work_station', 'User\ServiceProfileController@workStation');
    Route::get('user/get_categories/{id}', 'User\ServiceProfileController@getCategory');
    Route::get('user/get_mobiles', 'User\ServiceProfileController@getUserMobile');
    Route::get('user/get_categories_shop/{id}', 'User\ServiceProfileController@getUserShopDefine');
    Route::get('user/get_community', 'User\ServiceProfileController@getUserCommunity');
    Route::post('user/user_service_profile_create', 'User\ServiceProfileController@makeUserServiceProfile');

});

//$router->group(['middleware' => 'auth:api'], function () use ($router) {
//    // most of your routes go here
//});
