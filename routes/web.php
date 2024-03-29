<?php

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

Route::get('/', function () {
    return view('Front/acc');
})->name('index');


Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('dash', function () {
//     return view('Back/dashboard');
    
// });
Route::get('admin/editer', 'AdminController@editer')->name('admin.editer');
Route::resource('admin', 'AdminController');

Route::resource('livres','LivresController');
Route::get('admin/livres/editer', 'AdminLivresController@editer')->name('admin/livres.editer');
Route::resource('admin/livres','AdminLivresController',['names' => 'admin/livres']);