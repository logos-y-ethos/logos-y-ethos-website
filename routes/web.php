<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SecretaryController;
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
Route::get('/nosotros/organizacion', [WebsiteController::class, 'getOrganization']);
Route::get('/nosotros/asamblea-general', [WebsiteController::class, 'getGeneralAssembly']);
Route::get('/nosotros/comite-consultivo', [WebsiteController::class, 'getAdvisoryComitee']);


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

    // Secretarías
    Route::get('/secretarias', [SecretaryController::class, 'indexSecretariesWithMembers']);
    Route::get('/secretarias/agregar', function () {
        return view('admin.directors.add');
    });
    Route::post('/secretarias/agregar', [SecretaryController::class, 'storeSecretarieMember']);
    Route::get('/secretarias/borrar/{id}', [SecretaryController::class, 'destroySecretarieMember']);
    Route::get('/secretarias/editar/{id}', [SecretaryController::class, 'editSecretarieMember']);
    Route::post('/secretarias/editar/{id}', [SecretaryController::class, 'updateSecretarieMember']);

    // Consejo Directivo
    Route::get('/consejo-directivo', [PersonController::class, 'indexDirectors']);
    Route::get('/consejo-directivo/agregar', function () {
        return view('admin.directors.add');
    });
    Route::post('/consejo-directivo/agregar', [PersonController::class, 'storeDirector']);
    Route::get('/consejo-directivo/borrar/{id}', [PersonController::class, 'destroyDirector']);
    Route::get('/consejo-directivo/editar/{id}', [PersonController::class, 'editDirector']);
    Route::post('/consejo-directivo/editar/{id}', [PersonController::class, 'updateDirector']);

    // Miembros Activos
    Route::get('/miembros-activos', [PersonController::class, 'indexActiveMembers']);
    Route::get('/miembros-activos/agregar', function () {
        return view('admin.active-members.add');
    });
    Route::post('/miembros-activos/agregar', [PersonController::class, 'storeActiveMember']);
    Route::get('/miembros-activos/borrar/{id}', [PersonController::class, 'destroyActiveMember']);
    Route::get('/miembros-activos/editar/{id}', [PersonController::class, 'editActiveMember']);
    Route::post('/miembros-activos/editar/{id}', [PersonController::class, 'updateActiveMember']);

    // Colaboradores
    Route::get('/colaboradores', [PersonController::class, 'indexCollaborators']);
    Route::get('/colaboradores/agregar', function () {
        return view('admin.collaborators.add');
    });
    Route::post('/colaboradores/agregar', [PersonController::class, 'storeCollaborator']);
    Route::get('/colaboradores/borrar/{id}', [PersonController::class, 'destroyCollaborator']);
    Route::get('/colaboradores/editar/{id}', [PersonController::class, 'editCollaborator']);
    Route::post('/colaboradores/editar/{id}', [PersonController::class, 'updateCollaborator']);

    // Comité Consultivo
    Route::get('/comite-consultivo', [PersonController::class, 'indexAdvisoryComiteeMembers']);
    Route::get('/comite-consultivo/agregar', function () {
        return view('admin.advisory-committee.add');
    });
    Route::post('/comite-consultivo/agregar', [PersonController::class, 'storeAdvisoryComiteeMember']);
    Route::get('/comite-consultivo/borrar/{id}', [PersonController::class, 'destroyAdvisoryComiteeMember']);
    Route::get('/comite-consultivo/editar/{id}', [PersonController::class, 'editAdvisoryComiteeMember']);
    Route::post('/comite-consultivo/editar/{id}', [PersonController::class, 'updateAdvisoryComiteeMember']);

    // Eventos
    Route::get('/eventos', function () {
        return view('admin.dashboard');
    });

    // Usuarios
    Route::get('/usuarios', [UserController::class, 'index']);

});


// ༼つ◕_◕༽つ Have happy coding!!
