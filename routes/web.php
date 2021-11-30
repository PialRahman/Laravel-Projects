<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', 'App\Http\Controllers\ToybuyController@index')->name('index');
Route::get('/viewcartitems', 'App\Http\Controllers\ToybuyController@viewcartitems')->name('viewcartitems');
Route::post('cartstore', 'App\Http\Controllers\ToybuyController@cartstore')->name('cartstore');
Route::get('/deletecartitems/{id}', 'App\Http\Controllers\ToybuyController@deletecartitems')->name('deletecartitems');

Route::get('/modifyproduct', 'App\Http\Controllers\ToybuyController@modifyproduct')->name('modifyproduct');
Route::get('/editproduct/{id}', 'App\Http\Controllers\ToybuyController@editproduct')->name('editproduct');
Route::post('/updateproduct', 'App\Http\Controllers\ToybuyController@updateproduct')->name('updateproduct');
Route::get('/deleteproduct/{id}', 'App\Http\Controllers\ToybuyController@deleteproduct')->name('deleteproduct');;
Route::get('/contact', 'App\Http\Controllers\ToybuyController@contact')->name('contact');
Route::get('/addproduct', 'App\Http\Controllers\ToybuyController@addproduct')->name('addproduct');
Route::post('/addedproduct', 'App\Http\Controllers\ToybuyController@store')->name('addedproduct');
Route::get('/productdetails/{id}', 'App\Http\Controllers\ToybuyController@productdetails');
Route::post('/save', 'App\Http\Controllers\MainController@save')->name('save');
Route::get('productsviewfororder','App\Http\Controllers\ToybuyController@productsviewfororder')->name('productsviewfororder');
Route::post('/dashboard', 'App\Http\Controllers\MainController@dashboard')->name('dashboard');


Route::get('/search', 'App\Http\Controllers\ToybuyController@search');

Route::group(['middleware'=>['AuthCheck']],function(){


Route::get('/login', 'App\Http\Controllers\MainController@login')->name('login');
Route::get('/register', 'App\Http\Controllers\MainController@register')->name('register');
Route::get('Dashboarddetails/dashboardview', 'App\Http\Controllers\MainController@dashboardview');
Route::get('Dashboarddetails/usersdashboards','App\Http\Controllers\MainController@usersdashboards');
});

