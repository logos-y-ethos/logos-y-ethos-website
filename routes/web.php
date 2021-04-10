<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::get('/nosotros/secretarias', [WebsiteController::class, 'getSecretaries']);
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

// require __DIR__.'/auth.php';
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');


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
    Route::get('/usuarios/editar/{id}', [PublicationController::class, 'edit']);
    Route::post('/usuarios/editar/{id}', [PublicationController::class, 'update']);

    Route::get('/publicaciones/borrar/{id}', [PublicationController::class, 'destroy']);

    // Secretarías
    Route::get('/secretarias', [SecretaryController::class, 'indexSecretariesWithMembers']);
    Route::get('/secretarias/agregar', function () {
        return view('admin.secretaries.add');
    });
    Route::post('/secretarias/agregar', [SecretaryController::class, 'storeSecretaryMember']);
    Route::get('/secretarias/editar/{id}', [SecretaryController::class, 'editSecretaryMember']);
    Route::post('/secretarias/editar/{id}', [SecretaryController::class, 'updateSecretaryMember']);
    Route::get('/secretarias/borrar/{id}', [SecretaryController::class, 'destroySecretaryMember']);

    // Consejo Directivo
    Route::get('/consejo-directivo', [PersonController::class, 'indexDirectors']);
    Route::get('/consejo-directivo/agregar', function () {
        return view('admin.directors.add');
    });
    Route::post('/consejo-directivo/agregar', [PersonController::class, 'storeDirector']);
    Route::get('/consejo-directivo/editar/{id}', [PersonController::class, 'editDirector']);
    Route::post('/consejo-directivo/editar/{id}', [PersonController::class, 'updateDirector']);
    Route::get('/consejo-directivo/borrar/{id}', [PersonController::class, 'destroyDirector']);

    // Miembros Activos
    Route::get('/miembros-activos', [PersonController::class, 'indexActiveMembers']);
    Route::get('/miembros-activos/agregar', function () {
        return view('admin.active-members.add');
    });
    Route::post('/miembros-activos/agregar', [PersonController::class, 'storeActiveMember']);
    Route::get('/miembros-activos/editar/{id}', [PersonController::class, 'editActiveMember']);
    Route::post('/miembros-activos/editar/{id}', [PersonController::class, 'updateActiveMember']);
    Route::get('/miembros-activos/borrar/{id}', [PersonController::class, 'destroyActiveMember']);

    // Colaboradores
    Route::get('/colaboradores', [PersonController::class, 'indexCollaborators']);
    Route::get('/colaboradores/agregar', function () {
        return view('admin.collaborators.add');
    });
    Route::post('/colaboradores/agregar', [PersonController::class, 'storeCollaborator']);
    Route::get('/colaboradores/editar/{id}', [PersonController::class, 'editCollaborator']);
    Route::post('/colaboradores/editar/{id}', [PersonController::class, 'updateCollaborator']);
    Route::get('/colaboradores/borrar/{id}', [PersonController::class, 'destroyCollaborator']);

    // Comité Consultivo
    Route::get('/comite-consultivo', [PersonController::class, 'indexAdvisoryComiteeMembers']);
    Route::get('/comite-consultivo/agregar', function () {
        return view('admin.advisory-committee.add');
    });
    Route::post('/comite-consultivo/agregar', [PersonController::class, 'storeAdvisoryComiteeMember']);
    Route::get('/comite-consultivo/editar/{id}', [PersonController::class, 'editAdvisoryComiteeMember']);
    Route::post('/comite-consultivo/editar/{id}', [PersonController::class, 'updateAdvisoryComiteeMember']);
    Route::get('/comite-consultivo/borrar/{id}', [PersonController::class, 'destroyAdvisoryComiteeMember']);

    // Eventos
    Route::get('/eventos', function () {
        return view('admin.dashboard');
    });

    // Usuarios
    Route::get('/usuarios', [UserController::class, 'index']);
    Route::get('/usuarios/agregar', function () {
        return view('admin.users.add');
    });
    Route::post('/usuarios/agregar', [UserController::class, 'store']);
    Route::get('/usuarios/editar/{id}', [UserController::class, 'edit']);
    Route::post('/usuarios/editar/{id}', [UserController::class, 'update']);
    Route::get('/usuarios/reset-password/{id}', [UserController::class, 'resetPassword']);
    Route::get('/usuarios/borrar/{id}', [UserController::class, 'destroy']);

});


// ༼つ◕_◕༽つ Have happy coding!!
