<?php

use App\Http\Controllers\WebsiteController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');


/* ========================== Nosotros ========================== */

Route::get('/nosotros', function () {
    return view('website.us.who-we-are');
});
Route::get('/nosotros/secretarias', function () {
    return view('website.us.secretaries');
});
Route::get('/nosotros/consejo-directivo', function () {
    return view('website.us.board-of-directors');
});
Route::get('/nosotros/colaboradores', [WebsiteController::class, 'getCollaborators']);

require __DIR__.'/auth.php';

/* ========================== Publicaciones ========================== */

Route::get('/publicaciones', [WebsiteController::class, 'getPublications']);

/* ========================== Contacto ========================== */

Route::get('/contacto', function () {
    return view('website.contact');
});


// ༼つ◕_◕༽つ Have happy coding!!