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
Auth::routes();



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::resource('/Teachers','TeachersController');
Route::get('/Teachers/destroy/{id}', [
    "uses" => 'TeachersController@destroy',
    "as" => 'destroy'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', 'About@index')->name('about');


Route::resource('contact','ContactController');
Auth::routes();

Route::resource('about','About');

Route::resource('teacher_req','teacher_req');
Route::get('/teacher_req/destroy/{id}', [
    "uses" => 'teacher_req@destroy',
    "as" => 'destroy'
]);

Auth::routes();


Route::resource('lessons','LessonController');
Auth::routes();


Route::resource('exam_7','exam_7');
Auth::routes();

Route::get('/exam_7', 'exam_7@index')->name('exam_7');

Route::post('/store','exam_7@store');
Route::get('/store','exam_7@store');


Route::get('/result/{res}', [
    "uses" => 'result_s@index',
    "as" => 'result'
]);

Route::get('/exam/{name}', [
    "uses" => 'exam_7@index',
    "as" => 'exam'
]);

Route::get('/TopStudent','TopStudentController@index');
Route::get('/laboratory','Libraary@index');
Route::get('/cert','cert@index');
Route::get('/profile','profile@index');
Route::get('/profile/mob/{name}','profile@index2');

Route::get('/profile/edit','profile@editProfile');
Route::post('/profile/edit','profile@edit');
//classess
Route::get('/class/{edit}/view','profile@test');
Route::get('/Classes','ClassesController@index');
Route::get('/Classes/{name}','ClassesController@index2');
Route::get('/Classes/view/{name}/{name2}','ClassesController@viewclass');
Route::get('/Classes/view/{name}/{name2}/obj','ClassesController@viewobj');
Route::get('/Classes/view/{name}/{name2}/images','ClassesController@viewimages');
Route::get('/Classes/view/{name}/{name2}/video','ClassesController@viewvideo');
Route::get('/Classes/view/{name}/{name2}/paper', 'ClassesController@viewpaper');

Route::get('/Classes/view/{name}/{name2}/think','ClassesController@viewthink');
Route::get('/Classes/view/{name}/{name2}/work','ClassesController@viewwork');
Route::get('/Classes/view/{name}/{name2}/learn','ClassesController@viewlearn');
Route::get('/Classes/view/{name}/{name2}/try','ClassesController@viewtry');


//lab
Route::get('/lab','LabController@index');


Route::get('/class/{profile}/{edit}','profile@test');



//Api for mobile application
Route::get('/progress/{name}','profile@progress');
Route::get('/result/mob/{class}/{name}','profile@getresult');


