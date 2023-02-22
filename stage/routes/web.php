<?php

use App\Http\Controllers\CasCivilController;
use App\Http\Controllers\CasDelisController;

use App\Http\Controllers\CasTypeController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::controller(CasTypeController::class)->group(function () {
        Route::get('/form', 'create')->name('ajouter_cas');
        Route::post('/form/add', 'ajoute');
        Route::get('/aff_table', 'viewCas')->name('viewCas');
        Route::get('/edit/{id}', 'edit');
        Route::put('/mod/{id}', 'modifier');
        Route::get('/destroy/{id}', 'destroy');
    });
    Route::controller(CasCivilController::class)->group(function () {
        Route::post('/data_civil/add', 'ajouteCivil');
        Route::get('/data_civil', 'createCivil')->name('ajouter_civil');
        Route::get('/voir_cas_civil', 'viewCasCivil')->name('viewCasCivil');
        Route::get('/editCivil/{id}', 'editCivil');
        Route::put('/modCivil/{id}', 'modifierCivil');
        Route::get('/destroyCivil/{id}', 'destroyCivil');
        Route::get('/staticCasCivilAdmin', 'staticCasCivil');
        Route::post('/staticCasCivil/search', 'StatisticC');
    });
    Route::controller(CasDelisController::class)->group(function () {
        Route::post('/data_delis/add', 'ajouteDelis');
        Route::get('/data_delis', 'createDelis')->name('ajouter_delis');
        Route::get('/voir_cas_delis', 'viewCasDelis')->name('viewCasDelis');
        Route::get('/editDelis/{id}', 'editDelis');
        Route::put('/modDelis/{id}', 'modifierDelis');
        Route::get('/destroyDelis/{id}', 'destroyDelis');
    });
});


Route::prefix('user')->middleware('auth')->group(function(){
    Route::controller(CasCivilController::class)->group(function () {
        Route::post('/data_civil/add', 'ajouteCivil');
        Route::get('/data_civil_user', 'createCivil')->name('ajouter_civil_user');
        Route::get('/voir_cas_civil_user', 'viewCasCivil')->name('viewCasCivil_user');
        Route::get('/staticCasCivilUser','staticCasCivilUser');
        Route::post('/staticCasCivil/search','StatisticC');
    });
    Route::controller(CasDelisController::class)->group(function () {
        Route::post('/data_delis/add', 'ajouteDelis');
        Route::get('/data_delis_user', 'createDelis')->name('ajouter_delis_user');
        Route::get('/voir_cas_delis_user', 'viewCasDelis')->name('viewCasDelis_user');
        Route::get('/staticCasDelisUser','staticCasDelisUser');
        Route::post('/staticCasDelis/search','StatisticD');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
