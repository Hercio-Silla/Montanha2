<?php

use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\QuestionController;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Auth::routes();

Route::get('/', function () {
    return view('montanha');
})->name('/');

Route::get('/montanha', function () {
    return view('montanha');
});

Route::get('/gunung', function () {
    return view('gunung');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/blog', function () {
    $data['news'] = News::get();

    return view('blog-classic', $data);
});

Route::get('/blog/detail/{id}', function ($id) {
    $data['news'] = News::find($id);

    return view('blog-detail', $data);
})->name('blog.detail');

Route::get('/art1', function () {
    return view('standard-post-art1');
});

Route::get('/art2', function () {
    return view('standard-post-art2');
});

Route::get('/art3', function () {
    return view('standard-post-art3');
});

Route::get('/trek', function () {
    return view('single-trek');
});

Route::get('/trek2', function () {
    return view('single-trek-2');
});

Route::get('/trek3', function () {
    return view('single-trek-3');
});

Route::get('/trek4', function () {
    return view('single-trek-4');
});

Route::get('/trek5', function () {
    return view('single-trek-5');
});

Route::get('/trek-6', function () {
    return view('single-trek-6');
});

Route::get('/trek7', function () {
    return view('single-trek-7');
});

Route::get('/trek8', function () {
    return view('single-trek-8');
});

Route::get('/trek9', function () {
    return view('single-trek-9');
});

Route::get('/trek10', function () {
    return view('single-trek-10');
});

Route::get('/regis', function () {
    return view('register');
});

// Route::get('/forum', function () {
//     return view('forum');
// });

Route::get('/forum', [QuestionController::class, 'index'])->name('forum.index');
Route::get('/forum/show/{id}', [QuestionController::class, 'show'])->name('forum.show');

Route::group(['middleware' => 'auth'], function() {
    Route::post('/forum/store', [QuestionController::class, 'store'])->name('forum.store');
    Route::post('/forum-answer/store', [QuestionAnswerController::class, 'store'])->name('forum-answer.store');


});


$static_routes = ['forum', 'news'];

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role'], function() use($static_routes) {
    Route::get('/', function () {
        return redirect('/admin/forum');
    });

    foreach ($static_routes as $key => $prefix) {
        $prefix_uc = ucfirst(Str::camel($prefix));
        $controller = "App\\Http\\Controllers\\Admin\\{$prefix_uc}Controller";

        Route::get("/$prefix", $controller.'@index')->name("$prefix");
        Route::get("/$prefix/data", $controller.'@data')->name("$prefix.data");
        Route::post("/$prefix/store", $controller.'@store')->name("$prefix.store");
        Route::post("/$prefix/update/{id?}", $controller.'@update')->name("$prefix.update");
        Route::post("/$prefix/destroy/{id?}", $controller.'@destroy')->name("$prefix.destroy");
    }
});