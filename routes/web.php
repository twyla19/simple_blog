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
    return view('index');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'ProfileController@index')->name('list');
Route::get('/editprofile', 'ProfileController@profile')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('profil', function () {
//     return view('admin-profile');
// });
