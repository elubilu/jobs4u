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
Route::get('/All-Jobs', 'JobsController@allJobs');
Route::get('/Post-Jobs', 'JobsController@jobPost');
Route::get('/Signup', 'JobsController@signup');
// Route::get('HR/EmployeeInfo/{id}', 'HRController@employeeView');
// Route::post('HR/storeEmployee', 'HRController@store');