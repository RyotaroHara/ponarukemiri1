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

//Exercise 
Route::get('Exercise/cafeteria', 'ExerciseController@cafeteria')->name('Exercise.cafeteria');
Route::get('cafeteria/cafeteria1', 'ExerciseController@cafeteria1')->name('cafeteria.cafeteria1');
Route::get('cafeteria/cafeteria2', 'ExerciseController@cafeteria2')->name('cafeteria.cafeteria2');
Route::get('cafeteria/cafeteria3', 'ExerciseController@cafeteria3')->name('cafeteria.cafeteria3');
Route::get('cafeteria/cafeteria4', 'ExerciseController@cafeteria4')->name('cafeteria.cafeteria4');
Route::get('cafeteria/cafeteria5', 'ExerciseController@cafeteria5')->name('cafeteria.cafeteria5');
Route::get('cafeteria/cafeteria6', 'ExerciseController@cafeteria6')->name('cafeteria.cafeteria6');
Route::get('cafeteria/cafeteria7', 'ExerciseController@cafeteria7')->name('cafeteria.cafeteria7');
Route::get('cafeteria/cafeteria8', 'ExerciseController@cafeteria8')->name('cafeteria.cafeteria8');

Route::get('Exercise/way', 'ExerciseController@way')->name('Exercise.way');


Route::get('Exercise/office', 'ExerciseController@office')->name('Exercise.office');

//fitnessgoods 
Route::get('fitnessgoods/ichiba', 'FitnessgoodsController@ichiba')->name('fitnessgoods.ichiba');

// User registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['show']]);

    
});