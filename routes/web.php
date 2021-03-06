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
Route::get('/', 'admin\StaticPagesController@home');
Route::get('/menu', 'admin\StaticPagesController@menu');
Route::get('/menu/{slug}', 'admin\StaticPagesController@singleMenu');
Route::get('/reservations', 'admin\StaticPagesController@reservations');
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

// Admin Customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');

Route::get('/admin/reservations', 'admin\CustomersController@allReservations');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::get('/admin/users/edit', 'admin\UsersController@edit');

// Route::get('/admin/food-items/{id}/edit','admin\FoodItemsController@edit' );

// Admin Authentication

Route::get('/admin/register', function () {
    return view('auth/register');
});
Route::get('/admin/login', function () {
    return view('auth/login');
});
// Route::get('/app', function () {
//     return view('test');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
