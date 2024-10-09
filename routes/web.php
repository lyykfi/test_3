<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::post('/employee/search', [EmployeeController::class, 'search']);

Route::fallback(function () {
    return view('app');
});