<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CulturepageController;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect')->middleware('auth','verified');

//landing page
Route::get('/culturedetail/{id}', [HomeController::class, 'culturedetail']);
Route::post('/add_comment', [HomeController::class, 'add_comment']);
Route::post('/add_reply', [HomeController::class, 'add_reply']);
Route::resource('culturepage', CulturepageController::class);
Route::resource('kategori', KategoriController::class);

Route::get('about-me', function (){
 return view('landingpage.about-me');
});


//Admin page
Route::resource('culture', CultureController::class);
Route::delete('culture/{id}', 'CultureController@destroy')->name('culture.destroy');
Route::get('culture-pdf', [CultureController::class, 'culturePDF'])->name('culture.PDF');

Route::resource('comment', CommentController::class);
Route::delete('comment/{id}', 'CommentController@destroy')->name('comment.destroy');

Route::resource('reply', ReplyController::class);
Route::delete('reply/{id}', 'ReplyController@destroy')->name('reply.destroy');
