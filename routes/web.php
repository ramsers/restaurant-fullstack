<?php

use Illuminate\Support\Facades\Route;

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


// Static Pages
Route::get('/', 'admin\FoodCategoriesController@home');
Route::get('/menu', 'admin\StaticPagesController@menu');
Route::get('/menu/{slug}', 'admin\StaticPagesController@singleMenu');
Route::get('/waitlist', 'admin\StaticPagesController@waitlist');
Route::get('/contact', 'admin\StaticPagesController@contact');
Route::get('/about', 'admin\StaticPagesController@about');
Route::get('/offers', 'admin\StaticPagesController@offers');

// Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::get('/admin/food-categories/{id}/edit','admin\FoodCategoriesController@edit' );

// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::get('/admin/food-items/{id}/edit','admin\FoodItemsController@edit' );

// Admin Authentication

Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
// Route::get('/app', function () {
//     return view('test');
// });


