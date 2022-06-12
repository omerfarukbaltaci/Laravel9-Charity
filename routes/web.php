<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;
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
Route::post('/getcontent', [HomeController::class, 'getcontent'])->name('getcontent');


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

        #User Panel Reviews
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');

        #User Panel Contents
        Route::get('/contents', 'contents')->name('contents');
        Route::get('/contentcreate', [ContentController::class, 'contentcreate'])->name('contentcreate');
        Route::post('/contentstore', [ContentController::class, 'contentstore'])->name('contentstore');
        Route::get('/contentedit/{id}', [ContentController::class, 'contentedit'])->name('contentedit');
        Route::post('/contentupdate/{id}', [ContentController::class, 'contentupdate'])->name('contentupdate');
        Route::get('/contentdestroy/{id}', [ContentController::class, 'contentdestroy'])->name('contentdestroy');

        #User Panel Menus
        Route::get('/menus', 'menus')->name('menus');
        Route::get('/menucreate', [MenuController::class, 'menucreate'])->name('menucreate');
        Route::post('/menustore', [MenuController::class, 'menustore'])->name('menustore');
        Route::get('/menuedit/{id}', [MenuController::class, 'menuedit'])->name('menuedit');
        Route::post('/menuupdate/{id}', [MenuController::class, 'menuupdate'])->name('menuupdate');
        Route::get('/menudestroy/{id}', [MenuController::class, 'menudestroy'])->name('menudestroy');

        #User Panel Donations
        Route::get('/donations', 'donations')->name('donations');

    });

    #Payment Routes
    Route::prefix('payment')->name('payment.')->controller(PaymentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/donate', 'donate')->name('donate');
        Route::post('/storedonate', 'storedonate')->name('storedonate');
    });


// *************** ADMIN PANEL ROUTES ***************
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
// *************** GENERAL ROUTES ***************
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
        Route::get('/donation', [AdminHomeController::class, 'donation'])->name('donation');
        Route::get('/donatedestroy/{id}', [AdminHomeController::class, 'donatedestroy'])->name('donatedestroy');

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

