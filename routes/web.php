<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateSettingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
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
    Route::get('/dashboard', function () {
        return view('admin.index_dashboard');
    });

    Route::resource('/courses', CourseController::class);
    Route::get('/courses/{id}/topic', function () {
        return view('admin.pages.course.create-topic');
    });

    Route::resource('/categories', CategoryController::class);
    // Route::get('/categories', function () {
    //     return view('admin.pages.category.index');
    // });
    // Route::get('/categories/create', function () {
    //     return view('admin.pages.category.create');
    // })->name('categories.create');

    Route::get('/profile', function () {
        return view('admin.pages.profile.index');
    });

    Route::get('/reviews', function () {
        return view('admin.pages.review.index');
    });

    Route::get('/purchases', function () {
        return view('admin.pages.purchase.index');
    });

    Route::resource('/instructors', InstructorController::class);

    Route::get('/questions', function () {
        return view('admin.pages.question.index');
    });

    Route::get('/students', function () {
        return view('admin.pages.student.index');
    });

    Route::resource('/admins', AdminController::class);

    Route::get('/reports', function () {
        return view('admin.pages.report.index');
    });
    Route::get('/reports/{id}', function () {
        return view('admin.pages.report.detail');
    });

    Route::get('/certificate', [CertificateSettingController::class, 'index'])->name('certificate.index');
    Route::get('/certificate/{id}', [CertificateSettingController::class, 'edit'])->name('certificate.edit');
    Route::post('/certificate/{id}', [CertificateSettingController::class, 'update'])->name('certificate.update');

    Route::resource('/articles', ArticleController::class);

    Route::resource('/article-categories', ArticleCategoryController::class);

    Route::get('/category-articles/create', function () {
        return view('admin.pages.category-article.create');
    });

    Route::get('/purchase-history', function () {
        return view('admin.pages.purchase-history.index');
    });

    Route::get('/my-course', function () {
        return view('admin.pages.my-course.index');
    });
    Route::get('/my-course/{id}', function () {
        return view('admin.pages.my-course.detail');
    });     
    Route::get('/my-course/{id}/watch', function () {
        return view('admin.pages.my-course.watch');
    });

    Route::get('/my-certificate', function () {
        return view('admin.pages.my-certificate.index');
    });
    Route::get('/my-certificate/{id}', function () {
        return view('admin.pages.my-certificate.detail');
    });

    Route::get('/webinars', function () {
        return view('admin.pages.webinar.index');
    });
    Route::get('/webinars/create', function () {
        return view('admin.pages.webinar.create');
    });
    Route::get('/webinars/settings', function () {
        return view('admin.pages.webinar.setting');
    });
    Route::get('/webinars/{id}', function () {
        return view('admin.pages.webinar.detail');
    });
});