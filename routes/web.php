<?php

use App\Http\Controllers\RequestsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagController;
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
})->middleware('auth');

Route::get('/tags-list', function () {
    return view('tagged.tags');
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

Route::get('/auth/showLoginForm', [LoginController::class, 'showLoginForm'])->name('auth.showLoginForm');
Route::get('/auth/register', [LoginController::class, 'register'])->name('auth.register');
Route::post('/auth/registration', [LoginController::class, 'registration']);
Route::post('/auth/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//FILE UPLOAD ROUTE
Route::get('/requests/display-request-image/{request_id}', [RequestsController::class, 'display_request_image'])->name('request_file');


Route::get('/tagged/tags-list', [TagController::class, 'tag']);
Route::get('/tagged/tagged_request/{tag_id}', [TagController::class, 'tagged_request']);
