<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


//for Views
Route::get('/home', [App\Http\Controllers\HomeController::class , 'redirect']);

Route::get('/', [App\Http\Controllers\HomeController::class , 'index']);





//for admins
Route::get('/add_doctor_view', [App\Http\Controllers\AdminController::class , 'addView']);

Route::post('/upload_doctor', [App\Http\Controllers\AdminController::class , 'upload']);

Route::get('/show', [App\Http\Controllers\AdminController::class , 'show']);

Route::get('/show_doctors', [App\Http\Controllers\AdminController::class , 'showDoctors']);

Route::get('/destroy/{id}', 'App\Http\Controllers\AdminController@destroy')->name('appointment.delete');

Route::get('/prove_appointment/{id}', 'App\Http\Controllers\AdminController@approve')->name('appointment.approve');

Route::get('/edit/{id}', 'App\Http\Controllers\AdminController@doctorEdit')->name('doctor.edit');

Route::put('/update/{id}', 'App\Http\Controllers\AdminController@doctorUpdate')->name('doctor.update');

Route::get('/destroy/{id}', 'App\Http\Controllers\AdminController@doctorDestroy')->name('doctor.delete');




//for users
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store']);

Route::get('/appointment_view', [App\Http\Controllers\HomeController::class , 'myAppointment']);

Route::get('/destroy/{id}', 'App\Http\Controllers\HomeController@destroy')->name('appointment.delete');







//Auth
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



