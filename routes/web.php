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

//Route::get('/', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'HomeController@play')->name('play');
Route::get('/gameplay/{id}', 'HomeController@gameplay')->name('gameplay');

Route::get('/answercheck/{que_id}/{ans}', 'HomeController@answercheck');

// Route::get('/example', function(){
//     dd(App\Category::find(1)->questions->take(1));
// });


Route::get('/vuebata/{id}', 'HomeController@vuebata');
Route::get('/vuelife/{id}', 'HomeController@vuelife');
Route::get('/vuescore/{id}', 'HomeController@vuescore');
Route::get('/vuelevel/{id}', 'HomeController@vuelevel');


