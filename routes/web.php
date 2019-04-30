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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/All-Jobs', function () {
//     return view('allJobs');
// });
// Route::get('/Post-Jobs', function () {
//     return view('jobPost');
// });
// Route::get('/Signup', function () {
//     return view('signupEmployee');
// });
Route::get('/', 'JobsController@home');
Route::get('/Profile', 'UserController@profile');
Route::get('/Education', 'UserController@addEducation');
Route::get('/editEducation/{id}', 'UserController@editEducation');
Route::get('/deleteEducation/{id}', 'UserController@deleteEducation');
Route::get('/deleteExperience/{id}', 'UserController@deleteExperience');
Route::get('/Experience', 'UserController@addExperience');
Route::post('/storeExperience', 'UserController@storeExperience');
Route::post('/storeEducation', 'UserController@storeEducation');
Route::get('/Home', 'UserController@home');
Route::get('/All-Jobs', 'JobsController@allJobs');
Route::get('/Post-Jobs', 'JobsController@jobPost');
Route::get('/Job-Details/{id}', 'JobsController@jobDetails');
Route::get('/Signup', 'JobsController@signup');
Route::post('/User-Registration', 'UserController@storeUser');
Route::post('/Login', 'UserController@login');
// Route::get('HR/EmployeeInfo/{id}', 'HRController@employeeView');
// Route::post('HR/storeEmployee', 'HRController@store');