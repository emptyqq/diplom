<?php

use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\UserCotnroller;
use App\Models\Content;
use Illuminate\Http\Request;
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



Route::group(['middleware' => 'guest'], function () {

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('login', function () {
        return view('login');
    })->name('login');

    Route::get('registration', function () {
        return view('registration');
    })->name('registration');
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function () {
        $contents = Content::all();

        return view('welcome', [
            'contents' => $contents,
        ]);
    })->name('home');

    Route::get('/news', function () {
        return view('news');
    })->name('news');

    Route::get('/movies', function () {
        return view('movies');
    })->name('movies');

    Route::get('/serials', function () {
        return view('serials');
    })->name('serials');

    Route::get('/concerts', function () {
        return view('concerts');
    })->name('concerts');

    Route::get('docfilms', function () {
        return view('docfilms');
    })->name('docfilms');

    Route::get('docserials', function () {
        return view('docserials');
    })->name('docserials');

    Route::get('tv', function () {
        return view('tv');
    })->name('tv');

    Route::get('trophy', function () {
        return view('trophy');
    })->name('trophy');

    Route::get('premium', function () {
        return view('premium');
    })->name('premium');

    Route::get('profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('videos', function () {
        return view('videos');
    })->name('videos');

    Route::get('content', function () {
        $contents = Content::all();

        return view('admin.content', [
            'contents' => $contents,
        ]);
    })->name('content');

    Route::get('content_add', function () {
        return view('admin.content_add');
    })->name('content_add');

    Route::get('users', function () {
        return view('admin.users');
    })->name('users');


});




Route::group(['prefix' => 'core'], function () {
    Route::post("/registration", [UserCotnroller::class, 'registration'])->name('core.registration');

    Route::post("/login", [UserCotnroller::class, 'login'])->name('core.login');

    Route::get("/logout", [UserCotnroller::class, 'logout'])->name('core.logout');

    Route::post("/content/create", [ContentController::class, 'Create'])->name('create_content');
});
