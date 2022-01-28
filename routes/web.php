<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontPage\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontPage\AboutController;
use App\Http\Controllers\FrontPage\MyCourseController;
use App\Http\Controllers\FrontPage\DetailMyCourseController;

use App\Http\Controllers\CertificateSettingController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LessonFileController;
use App\Http\Controllers\LessonQuizController;
use App\Http\Controllers\LessonVideoController;
use App\Http\Controllers\TopicController;
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
Route::prefix('/')->group(function(){
   Route::get('home',[HomeController::class,'index'])->name('home'); 
   Route::get('about',[AboutController::class,'index'])->name('about'); 
   Route::get('course',[MyCourseController::class,'index'])->name('course'); 
   Route::get('course-detail',[DetailMyCourseController::class,'index'])->name('course'); 
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('admin.index_dashboard');
    });

    Route::resource('/courses', AdminCourseController::class);
    Route::get('/courses/{id}/topics/create', [TopicController::class, 'create'])->name('topics.create');
    Route::post('/courses/{id}/topics/create', [TopicController::class, 'store'])->name('topics.store');
    Route::get('/courses/{course_id}/topics/{topic_id}', [TopicController::class, 'edit'])->name('topics.edit');
    Route::post('/courses/{course_id}/topics/{topic_id}', [TopicController::class, 'update'])->name('topics.update');
    Route::delete('/courses/topics/{topic_id}', [TopicController::class, 'destroy'])->name('topics.destroy');

    Route::delete('lesson/{id}', [LessonController::class, 'destroy'])->name('lessons.destroy');

    Route::post('lesson/file/create/{topic_id}', [LessonFileController::class, 'store'])->name('lessons.file-store');
    Route::get('lesson/file/{id}', [LessonFileController::class, 'edit'])->name('lessons.file-edit');
    Route::post('lesson/file/{id}', [LessonFileController::class, 'update'])->name('lessons.file-update');

    Route::post('lesson/video/create/{topic_id}', [LessonVideoController::class, 'store'])->name('lessons.video-store');
    Route::get('lesson/video/{id}', [LessonVideoController::class, 'edit'])->name('lessons.video-edit');
    Route::post('lesson/video/{id}', [LessonVideoController::class, 'update'])->name('lessons.video-update');

    Route::post('lesson/quiz/create/{topic_id}', [LessonQuizController::class, 'store'])->name('lessons.quiz-store');
    Route::get('lesson/quiz/{id}', [LessonQuizController::class, 'edit'])->name('lessons.quiz-edit');
    Route::post('lesson/quiz/{id}', [LessonQuizController::class, 'update'])->name('lessons.quiz-update');
    
    Route::resource('/categories', CategoryController::class);

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