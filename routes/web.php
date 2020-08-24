<?php

use App\Events\FormSubmitted;
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
use App\Http\Controllers\FrontEndController;


//drink
Route::get('/Drink', 'BackEndController@index_drink');
Route::get('/create_drink', 'BackEndController@create_drink');
Route::post('/insert_drink', 'BackEndController@add_drink')->name('insert_drink');
Route::get('/read_drink/{id}', 'BackEndController@read_drink');
Route::get('/update_drink/{id}', 'BackEndController@update_drink');
Route::post('/edit_drink/{id}', 'BackEndController@edit_drink');
Route::get('/delete_drink/{id}', 'BackEndController@delete_drink');

//donut
Route::get('/Donut', 'BackEndController@index_donut');
Route::get('/create_donut', 'BackEndController@create_donut');
Route::post('/insert_donut', 'BackEndController@add_donut')->name('insert_donut');
Route::get('/read_donut/{id}', 'BackEndController@read_donut');
Route::get('/update_donut/{id}', 'BackEndController@update_donut');
Route::post('/edit_donut/{id}', 'BackEndController@edit_donut');
Route::get('/delete_donut/{id}', 'BackEndController@delete_donut');

//fancy donut
Route::get('/FancyDonut', 'BackEndController@index_fancy_donut');
Route::get('/create_fancy_donut', 'BackEndController@create_fancy_donut');
Route::post('/insert_fancy_donut', 'BackEndController@add_fancy_donut')->name('insert_fancy_donut');
Route::get('/read_fancy_donut/{id}', 'BackEndController@read_fancy_donut');
Route::get('/update_fancy_donut/{id}', 'BackEndController@update_fancy_donut');
Route::post('/edit_fancy_donut/{id}', 'BackEndController@edit_fancy_donut');
Route::get('/delete_fancy_donut/{id}', 'BackEndController@delete_fancy_donut');

//donut
Route::get('/SandWich', 'BackEndController@index_sandwich');
Route::get('/create_sandwich', 'BackEndController@create_sandwich');
Route::post('/insert_sandwich', 'BackEndController@add_sandwich')->name('insert_sandwich');
Route::get('/read_sandwich/{id}', 'BackEndController@read_sandwich');
Route::get('/update_sandwich/{id}', 'BackEndController@update_sandwich');
Route::post('/edit_sandwich/{id}', 'BackEndController@edit_sandwich');
Route::get('/delete_sandwich/{id}', 'BackEndController@delete_sandwich');

//croissant and Bagels
Route::get('/Croissant', 'BackEndController@index_croissant');
Route::get('/create_croissant', 'BackEndController@create_croissant');
Route::post('/insert_croissant', 'BackEndController@add_croissant')->name('insert_croissant');
Route::get('/read_croissant/{id}', 'BackEndController@read_croissant');
Route::get('/update_croissant/{id}', 'BackEndController@update_croissant');
Route::post('/edit_croissant/{id}', 'BackEndController@edit_croissant');
Route::get('/delete_croissant/{id}', 'BackEndController@delete_croissant');

//pastries
Route::get('/Pastries', 'BackEndController@index_pastries');
Route::get('/create_pastries', 'BackEndController@create_pastries');
Route::post('/insert_pastries', 'BackEndController@add_pastries')->name('insert_pastries');
Route::get('/read_pastries/{id}', 'BackEndController@read_pastries');
Route::get('/update_pastries/{id}', 'BackEndController@update_pastries');
Route::post('/edit_pastries/{id}', 'BackEndController@edit_pastries');
Route::get('/delete_pastries/{id}', 'BackEndController@delete_pastries');

//feedback
Route::get('/FeedBack', 'BackEndController@index_feed');
Route::get('/create_feed', 'BackEndController@create_feed');
Route::post('/insert_feed', 'BackEndController@add_feed')->name('insert_feed');
Route::get('/read_feed/{id}', 'BackEndController@read_feed');
Route::get('/update_feed/{id}', 'BackEndController@update_feed');
Route::post('/edit_feed/{id}', 'BackEndController@edit_feed');
Route::get('/delete_feed/{id}', 'BackEndController@delete_feed');

//order
Route::get('/Order', 'BackEndController@show_order');
Route::get('/read_order/{id}', 'BackEndController@read_order');

//Login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','LoginController@logout');

//Front End
Route::get('/', function () {
    return view('FrontEnd.index');
});
Route::get('/menu','FrontEndController@menu');
Route::get('/contact','FrontEndController@contact');
Route::post('/add_feedback','FrontEndController@add_feed');

//Cart
Route::get('/add_to_cart/{id}','FrontEndController@getAddToCart');
Route::get('/reduce/{id}','FrontEndController@getReduceByOne');
Route::get('/remove/{id}','FrontEndController@getRemoveAll');
Route::get('/shopping_cart','FrontEndController@getCart');
Route::get('/checkout','FrontEndController@getCheckout');
Route::post('/checkout','FrontEndController@postCheckout');


