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
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [WebsiteController::class, 'index']);

// Nosotros
Route::get('/nosotros', function () {
    return view('website.us.who-we-are');
});
Route::get('/nosotros/secretarias', function () {
    return view('website.us.secretaries');
});
Route::get('/nosotros/organizacion', function () {
    return view('website.us.organization');
});
Route::get('/nosotros/asamblea-general', [WebsiteController::class, 'getAsambleaGeneral']);
Route::get('/nosotros/comite-consultivo', [WebsiteController::class, 'getComiteConsultivo']);


// Publicaciones
Route::get('/publicaciones', [WebsiteController::class, 'getPublications']);
Route::get('/publicaciones/{id}', [WebsiteController::class, 'getPublication']);

// Eventos
Route::get('/eventos', function () {
    return view('website.events');
});

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
    Route::get('/publicaciones/agregar', function () {
        return view('admin.publications.add');
    });
    Route::post('/publicaciones/agregar', [PublicationController::class, 'store']);
    Route::get('/publicaciones/borrar/{id}', [PublicationController::class, 'destroy']);

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
