<?php

use App\Http\Controllers\RequestsController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tags-list', function () {
    return view('pages.tags');
});

Route::get('/firms-list', function () {
    return view('pages.firms');
});

// REQUEST ROUTES CRUD
Route::get('/requests', [RequestsController::class, 'index']);
Route::get('/requests/show/{request_id}', [RequestsController::class, 'show']);

Route::post('/requests', [RequestsController::class, 'store']);
Route::get('/requests/create', [RequestsController::class, 'create']);

Route::get('/requests/edit/{request_id}', [RequestsController::class, 'edit']);
Route::post('/requests/update/{request_id}', [RequestsController::class, 'update']);


