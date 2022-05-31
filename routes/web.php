<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\MenuController as AdminMenuController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
use App\Http\Controllers\AdminPanel\FaqController as FaqController;

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

Route::get('/hello', function () {
    return "Hello world";
});

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

// *************** HOME PAGE ROUTES ***************
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
});


Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/content/{id}', [HomeController::class, 'content'])->name('content');
Route::get('/menucontents/{id}/{slug}', [HomeController::class, 'menucontents'])->name('menucontents');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// *************** USER AUTH CONTROL ***************
Route::middleware('auth')->group(function () {

    // *************** USER PANEL ROUTES ***************
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews','reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
    });

// *************** ADMIN PANEL ROUTES ***************
        Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
            Route::get('/', [AdminHomeController::class, 'index'])->name('index');
// *************** GENERAL ROUTES ***************
            Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
            Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
// *************** ADMIN MENU ROUTES ****************
            Route::prefix('/menu')->name('menu.')->controller(AdminMenuController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
                Route::get('/show/{id}', 'show')->name('show');
            });
            // *************** ADMIN CONTENT ROUTES ****************
            Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
                Route::get('/show/{id}', 'show')->name('show');
            });
            // *************** ADMIN CONTENT IMAGE GALLERY ROUTES ****************
            Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
                Route::get('/{cid}', 'index')->name('index');
                Route::post('/store/{cid}', 'store')->name('store');
                Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');
            });
            // *************** ADMIN MESSAGE ROUTES ****************
            Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/show/{id}', 'show')->name('show');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');

            });
            // *************** ADMIN FAQ ROUTES ****************
            Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
                Route::get('/show/{id}', 'show')->name('show');
            });
            // *************** ADMIN COMMENT ROUTES ****************
            Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/show/{id}', 'show')->name('show');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');

            });
            // *************** ADMIN USER ROUTES ****************
            Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::get('/show/{id}', 'show')->name('show');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
                Route::post('/addrole/{id}', 'addrole')->name('addrole');
                Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');


            });
        });
});

