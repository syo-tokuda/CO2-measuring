<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PythonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('python',[PythonController::class,'index']);
Route::post('python',[PythonController::class,'store'])->name('user.profile');