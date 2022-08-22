<?php
/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::group([

    'prefix' => 'api'

], function ($router) {

    Route::get('/admin/product/brand', 'Admin\Product\ProductBrandController@getBrand');
    Route::get('/admin/product/brand/brand', 'Admin\Product\ProductBrandController@getAllBrand');
    Route::post('/admin/product/brand', 'Admin\Product\ProductBrandController@addBrand');
    Route::get('/admin/product/brand/{id}', 'Admin\Product\ProductBrandController@getBrandInfo');
    Route::post('/admin/product/brand/{id}', 'Admin\Product\ProductBrandController@updateBrand');
    Route::delete('/admin/product/brand/{id}', 'Admin\Product\ProductBrandController@delete');


    Route::get('/admin/product/category', 'Admin\Product\ProductCategoryController@getCategory');
    Route::get('/admin/product/category/category', 'Admin\Product\ProductCategoryController@getAllCategory');
    Route::get('/admin/product/category/sub_category/{id}', 'Admin\Product\ProductCategoryController@getAllSubCategory');
    Route::post('/admin/product/category', 'Admin\Product\ProductCategoryController@addCategory');
    Route::get('/admin/product/category/{id}', 'Admin\Product\ProductCategoryController@getCategoryInfo');
    Route::post('/admin/product/category/{id}', 'Admin\Product\ProductCategoryController@updateCategory');
    Route::delete('/admin/product/category/{id}', 'Admin\Product\ProductCategoryController@delete');



    Route::get('/admin/product/product', 'Admin\Product\ProductController@getProduct');
    Route::get('/admin/product/product/product', 'Admin\Product\ProductController@getAllProduct');
    Route::post('/admin/product/product', 'Admin\Product\ProductController@addProduct');
    Route::get('/admin/product/product/{id}', 'Admin\Product\ProductController@getProductInfo');
    Route::post('/admin/product/product/{id}', 'Admin\Product\ProductController@updateProduct');
    Route::delete('/admin/product/product/{id}', 'Admin\Product\ProductController@delete');



});
