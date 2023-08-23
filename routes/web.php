<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SampleController;



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
Route::get('/sendmail', [MailController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('enterfeedback', 'enterfeedback')->name('enterfeedback');

    

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

    Route::get('delete/{id}', 'remove');

    Route::get('deletefb/{id}', 'deletefb');

    Route::get('request', 'request')->name('request');

    Route::post('validate_request', 'validate_request')->name('sample.validate_request');

    Route::get('resetdirect/{id}', 'resetdirect');

    Route::get('reset', 'reset')->name('reset');

    Route::post('validate_reset', 'validate_reset')->name('sample.validate_reset');


    Route::post('feedback_table', 'feedback_table')->name('sample.feedback_table');

    Route::post('validate_feedback', 'validate_feedback')->name('validate_feedback');
});

Route::post('/saveCanvas', [TypeController::class, 'saveCanvas']);

