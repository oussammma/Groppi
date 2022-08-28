<?php

use App\Http\Controllers\admin\miseCategories;
use App\Http\Controllers\admin\miseMarques;
use App\Http\Controllers\admin\miseProduitsController;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\admin\whatp;
use App\Http\Controllers\user\chatController;
use App\Http\Controllers\user\chienController;
use App\Http\Controllers\user\contactController;
use App\Http\Controllers\user\magasinController;
use App\Http\Controllers\user\MarqueProController;
use App\Http\Controllers\user\medicalController;
use App\Http\Controllers\user\noMarqueController;
use App\Http\Controllers\user\oiseauxController;
use App\Http\Controllers\user\ProduitsDetController;
use App\Http\Controllers\user\proMarCatController;
use App\Http\Controllers\user\serviceController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/produit/{name}', [ProduitsDetController::class, 'index'])->name('proDet.index');
Route::get('/nos-magasins', [magasinController::class, 'index'])->name('magasin.index');
Route::get('/nos-services', [serviceController::class, 'index'])->name('service.index');
Route::get('/contactez-nous', [contactController::class, 'index'])->name('contact.index');
Route::get('/marque/{name}', [MarqueProController::class, 'index'])->name('marPro.index');
// Route::get('/produit/{cat}/{mar}', [proMarCatController::class, 'index'])->name('marProCat.index');
Route::get('/medical-produits', [medicalController::class, 'index'])->name('med.index');
Route::get('/oiseaux', [oiseauxController::class, 'index'])->name('oiseaux.index');
Route::get('/chat', [chatController::class, 'index'])->name('chat.index');
Route::get('/chien', [chienController::class, 'index'])->name('chien.index');
Route::get('/Marques', [noMarqueController::class, 'index'])->name('noMar.index');
Route::post('/contactez-nous/send', [contactController::class, 'sendEmail'])->name('contact.sendEmail');

Route::get('/produits-liste', [WelcomeController::class, 'search']);

Auth::routes();  

Route::middleware('auth')->group(function () {
    Route::get('/produits', [miseProduitsController::class, 'index'])->name('misePro.index');
    Route::post('/produits/ajouter', [miseProduitsController::class, 'store'])->name('misePro.store');
    Route::get('/produits/{id}', [miseProduitsController::class, 'delete'])->name('misePro.delete');
    Route::post('/produits/modifier', [miseProduitsController::class, 'edite'])->name('misePro.edite');
    // Route::get('/pro_searsh', [miseProduitsController::class, 'searsh']);


    Route::get('/marques', [miseMarques::class, 'index'])->name('miseMar.index');
    Route::post('/marques/ajouter', [miseMarques::class, 'store'])->name('mar.store');
    Route::get('/marques/{id}', [miseMarques::class, 'delete'])->name('mar.delete');
    Route::post('/marques/modifier', [miseMarques::class, 'edite'])->name('mar.edite');
    // Route::get('/mar_searsh', [miseMarques::class, 'searsh']);


    Route::get('/categories', [miseCategories::class, 'index'])->name('miseCat.index');
    Route::post('/categories/ajouter', [miseCategories::class, 'store'])->name('cat.store');
    Route::get('/categories/{id}', [miseCategories::class, 'delete'])->name('cat.delete');
    Route::post('/categories/modifier', [miseCategories::class, 'edite'])->name('cat.edite');
    // Route::get('/cat_searsh', [miseCategories::class, 'searsh']);



    Route::get('/profile', [profileController::class, 'index'])->name('profile.index');
    Route::post('/profile/modifier', [profileController::class, 'edite'])->name('profile.edite');
    Route::post('/profile/motsepass', [profileController::class, 'pass'])->name('update.pass');
    Route::post('/profile/whatssap', [profileController::class, 'wtsp_update'])->name('watsp.edite');
});
Auth::routes();

Route::get('/accueil', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
