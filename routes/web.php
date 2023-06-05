<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\UserCotnroller;
use App\Models\Content;
use App\Models\Content_genre;
use App\Models\Genre;
use App\Models\Type;
use App\Models\User;
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



    Route::get('/type/{type}', function (Type $type) {
        $contents = Content::where('visibility', 1)->where("type", $type->id)->get();
        return view('movies', [
            'contents' => $contents,
            'type' => $type,
        ]);
    })->name('type');

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
        $types = Type::all();
        $genres = Genre::orderBy("name")->get();

        return view('admin.content_add', [
            'types' => $types,
            'genres' => $genres,
        ]);
    })->name('content_add');

    Route::get('content_more/{content}', function (Content $content) {
        $types = Type::all();
        $genres = Genre::orderBy("name")->get();

        $content->genres = Content_genre::where("content_id", $content->id)->join("genres", "content_genres.genre_id", "=", "genres.id")->get();

        return view('admin.content_more', [
            'content' => $content,
            'types' => $types,
            'genres' => $genres,
        ]);
    })->name('content_more');





    Route::get('users', function () {
        $users = User::all();

        return view('admin.users', [
            'all_users' => $users,
        ]);
    })->name('users');




    Route::get('categories', function () {
        $types = Type::all();
        return view('admin.categories', [
            'types' => $types,
        ]);
    })->name('categories');

    Route::get('categories_add', function () {
        return view('admin.categories_add');
    })->name('categories_add');




    Route::get('genre', function () {
        $genres = Genre::orderBy('id', 'desc')->get();

        return view('admin.genre', [
            'vse_janri' => $genres,
        ]);
    })->name('genre');

    Route::get('genre_add', function () {
        return view('admin.genre_add');
    })->name('genre_add');




    Route::get('subscription', function () {
        return view('subscription');
    })->name('subscription');

    Route::get('search', function () {
        return view('search');
    })->name('search');
});




Route::group(['prefix' => 'core'], function () {
    Route::post("/registration", [UserCotnroller::class, 'registration'])->name('core.registration');

    Route::post("/login", [UserCotnroller::class, 'login'])->name('core.login');

    Route::get("/logout", [UserCotnroller::class, 'logout'])->name('core.logout');

    Route::post("/user/edit/avatar", [UserCotnroller::class, 'editAvatar'])->name('core.user.edit.avatar');

    Route::group(['prefix' => 'admin'], function () {

        Route::post("/content/create", [ContentController::class, 'Create'])->name('create_content');
        Route::post("/content/edit", [ContentController::class, 'edit'])->name('edit_content');
        Route::post("/content/remove", [ContentController::class, 'remove'])->name('remove_content');

        Route::post("/genre/create", [GenreController::class, 'Create'])->name('create_genre');
        Route::post("/genre/edit", [GenreController::class, 'edit'])->name('edit_genre');
        Route::post("/genre/remove", [GenreController::class, 'remove'])->name('remove_genre');

        Route::post("/categories/create", [CategoriesController::class, 'Create'])->name('create_category');
        Route::post("/categories/edit", [CategoriesController::class, 'edit'])->name('edit_category');
        Route::post("/categories/remove", [CategoriesController::class, 'remove'])->name('remove_category');
    });
});
