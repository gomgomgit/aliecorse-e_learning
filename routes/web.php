<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/my-courses', function () {
        return view('admin.pages.courses.index');
    });
    Route::get('/my-courses/create', function () {
        return view('admin.pages.courses.create');
    });
    Route::get('/my-courses/{id}', function () {
        return view('admin.pages.courses.detail');
    });
    Route::get('/my-courses/{id}/topic', function () {
        return view('admin.pages.courses.create-topic');
    });
});