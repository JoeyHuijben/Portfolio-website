<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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
    return view('home');
});

Route::get('/projects', [ProjectsController::class, 'index']);

Route::get('/project', [ProjectsController::class, 'add']);
Route::post('/project', [ProjectsController::class, 'create']);

Route::get('/project/{project}', [ProjectsController::class, 'edit']);
Route::post('/project/{project}', [ProjectsController::class, 'update']);
