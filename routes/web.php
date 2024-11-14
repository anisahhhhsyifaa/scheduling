<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
    
]);

Route::group(['middleware' => ['auth'],
            'prefix' => 'admin',
            'as' => 'admin.',
], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('/administrator',App\Http\Controllers\AdministratorController::class);

    
    Route::resource('/teacher', App\Http\Controllers\TeacherController::class);

    Route::resource('/student', App\Http\Controllers\StudentController::class);

    
    
});
