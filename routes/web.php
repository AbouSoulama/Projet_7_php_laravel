 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
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

Route::get('/delete-utilisateur/{id}', [UtilisateurController::class, 'delete_utilisateur']);
Route::get('/update-utilisateur/{id}', [UtilisateurController::class, 'update_utilisateur']);
Route::post('/update/traitement', [UtilisateurController::class, 'update_utilisateur_traitement']);
Route::get('/utilisateur', [UtilisateurController::class, 'liste_utilisateur']);
Route::get('/ajouter', [UtilisateurController::class, 'ajouter_utilisateur']);
Route::post('/ajouter/traitement', [UtilisateurController::class, 'ajouter_utilisateur_traitement']);
