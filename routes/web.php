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

Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('back')->group(function () {
//     Route::middleware(['CheckLogout'])->prefix('auth')->group(function () {
//         Route::get('/', 'Back\AuthController@login');
//         Route::post('/', 'Back\AuthController@postLogin');
//         Route::get('sign-up', 'Back\AuthController@getSignUp');
//         Route::post('sign-up', 'Back\AuthController@postSignUp');
//         Route::get('forgot', 'Back\AuthController@getForgot');
//     });
//     Route::middleware(['CheckLogin'])->prefix('admin')->group(function () {
//         Route::get('/', 'Back\AdminController@index');
//         Route::get('logout', 'Back\AdminController@logout');
//         Route::prefix('menu')->group(function () {
//             Route::get('/', 'Back\MenuController@getMenu');
//             Route::post('/', 'Back\MenuController@addMenu');
//             Route::post('/delete', 'Back\MenuController@deleteMenu');
//             Route::get('/update/{id}', 'Back\MenuController@getUpdateMenu');
//             Route::post('/update', 'Back\MenuController@postUpdateMenu');
//         });
//         Route::prefix('category')->group(function () {
//             Route::get('/', 'Back\CateController@getCate');
//             Route::post('/', 'Back\CateController@addCate');
//             Route::post('/delete', 'Back\CateController@deleteCate');
//             Route::get('/update/{id}', 'Back\CateController@getUpdateCate');
//             Route::post('/update', 'Back\CateController@postUpdateCate');
//         });
//         Route::prefix('user')->group(function () {
//             Route::get('/', 'Back\UserController@getUser');
//         });
//         Route::prefix('title')->group(function () {
//             Route::get('/', 'Back\TitleController@getTitle');
//             Route::post('/', 'Back\TitleController@addTitle');
//             Route::post('/delete', 'Back\TitleController@deleteTitle');
//             Route::get('/update/{id}', 'Back\TitleController@getUpdateTitle');
//             Route::post('/update', 'Back\TitleController@postUpdateTitle');
//         });
//         Route::prefix('exam')->group(function () {
//             Route::get('/', 'Back\ExamController@getExam');
//             Route::get('add-exam', 'Back\ExamController@getAddExam');
//             Route::get('add-question', 'Back\ExamController@getAddQuestion');
//             Route::get('add-answer', 'Back\ExamController@getAddAnswer');
//             Route::get('/question', 'Back\ExamController@getListQuestion');
//             Route::post('/delete', 'Back\ExamController@deleteExam');
//             Route::post('/submitExam', 'Back\ExamController@submitExam');
//             Route::post('/submitEditExam', 'Back\ExamController@submitEditExam');
//             Route::get('/update/{id}', 'Back\ExamController@getUpdateExam');
//             Route::get('/view/{id}', 'Back\ExamController@viewExam');
//         });
//         Route::prefix('inspection')->group(function () {
//             Route::get('/', 'Back\InspectController@index');
//         });
//     });
// });
