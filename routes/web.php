<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;

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

/* ========================== WEBSITE ========================== */

// Inicio
Route::get('/', function () {
    return view('index');
});

// Nosotros
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


// Publicaciones
Route::get('/publicaciones', [WebsiteController::class, 'getPublications']);

// Eventos

// Contacto
Route::get('/contacto', function () {
    return view('website.contact');
});

/* ========================== LOGIN ========================== */

require __DIR__.'/auth.php';

/* ========================== ADMIN ========================== */

Route::prefix('admin')->middleware(['auth'])->group( function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Publicaciones
    Route::get('/publicaciones', [PublicationController::class, 'index']);

    // Eventos
    Route::get('/eventos', function () {
        return view('admin.dashboard');
    });

    // Colaboradores
    Route::get('/colaboradores', [CollaboratorController::class, 'index']);
    Route::get('/colaboradores/agregar', function () {
        return view('admin.collaborators.add');
    });
    Route::post('/colaboradores/agregar', [CollaboratorController::class, 'store']);
    Route::get('/colaboradores/borrar/{id}', [CollaboratorController::class, 'destroy']);
    Route::get('/colaboradores/editar/{id}', [CollaboratorController::class, 'edit']);
    Route::post('/colaboradores/editar/{id}', [CollaboratorController::class, 'update']);

    // Usuarios
    Route::get('/usuarios', [UserController::class, 'index']);

});


// ༼つ◕_◕༽つ Have happy coding!!
