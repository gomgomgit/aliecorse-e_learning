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
    })->name('dashboard');
    Route::get('/courses', function () {
        return view('admin.pages.course.index');
    });
    Route::get('/courses/create', function () {
        return view('admin.pages.course.create');
    });
    Route::get('/courses/{id}', function () {
        return view('admin.pages.course.detail');
    });
    Route::get('/courses/{id}/topic', function () {
        return view('admin.pages.course.create-topic');
    });

    Route::get('/categories', function () {
        return view('admin.pages.category.index');
    });
    Route::get('/categories/create', function () {
        return view('admin.pages.category.create');
    })->name('categories.create');

    Route::get('/profile', function () {
        return view('admin.pages.profile.index');
    });

    Route::get('/reviews', function () {
        return view('admin.pages.review.index');
    });

    Route::get('/purchases', function () {
        return view('admin.pages.purchase.index');
    });

    Route::get('/instructors', function () {
        return view('admin.pages.instructor.index');
    });

    Route::get('/questions', function () {
        return view('admin.pages.question.index');
    });

    Route::get('/students', function () {
        return view('admin.pages.student.index');
    });

    Route::get('/admins', function () {
        return view('admin.pages.admin.index');
    });

    Route::get('/reports', function () {
        return view('admin.pages.report.index');
    });

    Route::get('/sertificates', function () {
        return view('admin.pages.sertificate.index');
    });
    Route::get('/sertificates/{id}', function () {
        return view('admin.pages.sertificate.edit');
    });

    Route::get('/articles', function () {
        return view('admin.pages.article.index');
    });
    Route::get('/articles/create', function () {
        return view('admin.pages.article.create');
    });

    Route::get('/category-articles', function () {
        return view('admin.pages.category-article.index');
    });
    Route::get('/category-articles/create', function () {
        return view('admin.pages.category-article.create');
    });
});