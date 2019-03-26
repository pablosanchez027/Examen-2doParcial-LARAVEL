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

/*
Ruta está compuesta de 3 cosas
1.- URL
2.- Que controller y que función de ese controller responden a esa solicitud
3.- Nombre de la ruta
4.- Método HTTP
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
Route::get('PalindromeController@PalindromeCheck')
    ->name('palindrome.PalindromeCheck');
Route::resource('palindrome', 'PalindromeController');

Auth::routes(['register' => false]);

