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



// проверка 
Route::any('/user', 'UserController@check');
 

// проверка 
Route::any('/user', 'UserController@check');


// Получение списка вопросов
Route::any('/questions', 'QuestionsController@index');
//Создание вопроса
Route::get('/question/create', 'QuestionsController@create'); 
// Получение вопроса
Route::any('/question/{id}', 'QuestionsController@one'); 

Route::get('/', function () {
    return view('welcome');
});
