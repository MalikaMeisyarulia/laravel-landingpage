<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepanController;

use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return 'task/landingpage';
});


Route::get('/landingpage', [TaskController::class, 'index']);