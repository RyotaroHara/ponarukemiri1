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

Route::get('place/{name)', 'ExerciseController@place');

//Exercise cafeteria
Route::get('Exercise/cafeteria', 'ExerciseController@cafeteria')->name('Exercise.cafeteria');
//cafeteria nakami
Route::get('cafeteria/cafeteria1', 'ExerciseController@cafeteria1')->name('cafeteria.cafeteria1');
Route::get('cafeteria/cafeteria2', 'ExerciseController@cafeteria2')->name('cafeteria.cafeteria2');
Route::get('cafeteria/cafeteria3', 'ExerciseController@cafeteria3')->name('cafeteria.cafeteria3');
Route::get('cafeteria/cafeteria4', 'ExerciseController@cafeteria4')->name('cafeteria.cafeteria4');
Route::get('cafeteria/cafeteria5', 'ExerciseController@cafeteria5')->name('cafeteria.cafeteria5');
Route::get('cafeteria/cafeteria6', 'ExerciseController@cafeteria6')->name('cafeteria.cafeteria6');
Route::get('cafeteria/cafeteria7', 'ExerciseController@cafeteria7')->name('cafeteria.cafeteria7');
Route::get('cafeteria/cafeteria8', 'ExerciseController@cafeteria8')->name('cafeteria.cafeteria8');

//Exercise way
Route::get('Exercise/way', 'ExerciseController@way')->name('Exercise.way');
//way nakami
Route::get('way/way1', 'ExerciseController@way1')->name('way.way1');
Route::get('way/way2', 'ExerciseController@way2')->name('way.way2');
Route::get('way/way3', 'ExerciseController@way3')->name('way.way3');
Route::get('way/way4', 'ExerciseController@way4')->name('way.way4');
Route::get('way/way5', 'ExerciseController@way5')->name('way.way5');
Route::get('way/way6', 'ExerciseController@way6')->name('way.way6');
Route::get('way/way7', 'ExerciseController@way7')->name('way.way7');
Route::get('way/way8', 'ExerciseController@way8')->name('way.way8');

//Exercise office
Route::get('Exercise/office', 'ExerciseController@office')->name('Exercise.office');
//office nakami
Route::get('office/office1', 'ExerciseController@office1')->name('office.office1');
Route::get('office/office2', 'ExerciseController@office2')->name('office.office2');
Route::get('office/office3', 'ExerciseController@office3')->name('office.office3');
Route::get('office/office4', 'ExerciseController@office4')->name('office.office4');
Route::get('office/office5', 'ExerciseController@office5')->name('office.office5');
Route::get('office/office6', 'ExerciseController@office6')->name('office.office6');
Route::get('office/office7', 'ExerciseController@office7')->name('office.office7');
Route::get('office/office8', 'ExerciseController@office8')->name('office.office8');
Route::get('office/office9', 'ExerciseController@office9')->name('office.office9');
Route::get('office/office10', 'ExerciseController@office10')->name('office.office10');

//battle page
Route::get('battle/battle', 'BattleController@cafeteria_genre')->name('battle.battle');
Route::get('battle/office', 'BattleController@office_genre')->name('battle.office');
Route::get('battle/way', 'BattleController@way_genre')->name('battle.way');

//fitnessgoods 
Route::get('fitnessgoods/ichiba', 'FitnessgoodsController@ichiba')->name('fitnessgoods.ichiba');


// User registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//battle post
Route::get('battle', 'BattleController@battle')->name('battle.post');
Route::post('battle', 'BattleController@battle');
Route::resource('users', 'UsersController');
Route::resource('battle', 'BattleController');


    
// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
Route::resource('users', 'UsersController', ['only' => ['show','battle']]);
Route::resource('battle', 'BattleController');

    
});