<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\MenuController as AdminMenuController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;

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

Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/content/{id}',[HomeController::class,'content'])->name('content');
Route::get('/menucontents/{id}/{slug}',[HomeController::class,'menucontents'])->name('menucontents');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// *************** ADMIN PANEL ROUTES ***************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
// *************** ADMIN MENU ROUTES ****************
    Route::prefix('/menu')->name('menu.')->controller(AdminMenuController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    // *************** ADMIN CONTENT ROUTES ****************
    Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    // *************** ADMIN CONTENT IMAGE GALLERY ROUTES ****************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{cid}','index')->name('index');
        Route::post('/store/{cid}','store')->name('store');
        Route::get('/destroy/{cid}/{id}','destroy')->name('destroy');
    });
});

