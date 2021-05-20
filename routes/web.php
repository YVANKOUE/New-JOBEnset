<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\ajouterController;
use App\Http\Controllers\annonceController;
use App\Http\Controllers\AnnonceRController;
use App\Http\Controllers\Admin\rolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\LocalizationController;
use \App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\NavigationController;
use App\Http\Controllers\Admin\PermissionsController;


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
    return view('welcome');
});


Route::get('/admin',[NavigationController::class,'Dashboard'])->name('Dashboard')->middleware('auth');

Auth::routes();


Route::get('/login6', function() {
    return view('auth.authlayout');
});

 
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('language/{locale}',  [LocalizationController::class,'lang'])->name('langue');

Route::resource('users', UsersController::class)->middleware('auth');

Route::delete('users_mass_destroy', [UsersController::class,'massDestroy'])->name('users.mass_destroy');

Route::get('profil/{id}',[NavigationController::class,'profile'])->name('profil');

Route::get('profilinformation/{id}',[NavigationController::class,'profileinformation'])->name('profilinformation');

Route::get('updatepassword/{id}',[NavigationController::class,'updatepassword'])->name('updatepassword');

Route::post('postupdatepassword',[NavigationController::class,'store'])->name('postupdatepassword');

Route::resource('permissions', PermissionsController::class)->middleware('auth');
Route::delete('permissions_mass_destroy', [PermissionsController::class,'massDestroy'])->name('permissions.mass_destroy');

Route::resource('roles', rolesController::class);

Route::delete('roles_mass_destroy', [rolesController::class,'massDestroy'])->name('roles.mass_destroy');
Route::get('annonce', [annonceController::class, 'index'])->name('annonce');

Route::resource('ajouter', ajouterController::class);
Route::resource('client', clientController::class);
Route::resource('listesAnnonce', AnnonceRController::class);



