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

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function () {
    Route::post('/password_modification', 'App\Http\Controllers\accountController@password_modification');
    Route::get('/password_modification', 'App\Http\Controllers\accountController@form_password_modification');

    Route::get('/dashboard', 'App\Http\Controllers\accountcontroller@dashboard');

    Route::get('signout', 'App\Http\Controllers\accountcontroller@signout');

    //PUBLICATIONS
    //Nouvelle Publication
    Route::get('/newpost', 'App\Http\Controllers\PostsController@viewNewPost');
    Route::post('/newpost', 'App\Http\Controllers\PostsController@addNewPost');
    //Affichage Publications
    Route::get('/posts', 'App\Http\Controllers\PostsController@posts');
    //Suppression Publication
    Route::post('/posts', 'App\Http\Controllers\PostsController@delPost');
    //Modification Publication
    Route::get('/modpost', 'App\Http\Controllers\PostsController@viewModPost');
    Route::post('/modpost', 'App\Http\Controllers\PostsController@modPost');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/inscription', 'App\Http\Controllers\inscriptioncontroller@inscription');

Route::post('/inscription', 'App\Http\Controllers\inscriptioncontroller@formulaire');

Route::get('/connexion', 'App\Http\Controllers\connexioncontroller@form');

Route::post('/connexion', 'App\Http\Controllers\connexioncontroller@connexion');

// <<<<<<< HEAD
// //Nouvelles Publications
// Route::get('/newpost', 'App\Http\Controllers\PostsController@viewNewPost');
// Route::post('/newpost', 'App\Http\Controllers\PostsController@addNewPost');
// Route::get('/posts', 'App\Http\Controllers\PostsController@posts');
// =======

// >>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b



// Route::get('/users', 'App\Http\Controllers\userscontroller@index');

// Route::get('/users/{id}', 'App\Http\Controllers\userscontroller@show')->name('Show.User');
