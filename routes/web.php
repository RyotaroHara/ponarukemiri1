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

Route::get('/', 'WelcomeController@index');


// User registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');



// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


// Route::group(['middleware' => ['auth']], function () {
// Route::resource('users', 'UsersController', ['only' => ['show','battle']]);
// Route::resource('battles', 'BattlesController');});

// cal 入力
Route::group(['middleware' => 'auth'], function () {


    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'edit']]);

    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'battle']]);

    Route::resource('battles', 'BattlesController', ['only' => ['store', 'destroy']]);
});
// If authenticated

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['show','battle']]);
    Route::resource('battle', 'BattlesController');
    
    //To Exercise Pages
    Route::get('place/{name}', 'ExerciseController@place')->name('Place');
    
    //To Exercise explanation
    Route::get('Exercises/{id}','ExerciseController@menu')->name('Menu');
    
    //battle page
    Route::get('battle/battle', 'BattlesController@battle_menu')->name('battle.menu');
    
    //battle post
    Route::get('battle', 'BattlesController@battle')->name('battle.post');
    Route::post('battle', 'BattlesController@battle');
    Route::resource('users', 'UsersController');
    Route::resource('battle', 'BattlesController');
    
    //fitnessgoods 
    Route::get('fitnessgoods/ichiba', 'FitnessgoodsController@ichiba')->name('fitnessgoods.ichiba');
    
});



