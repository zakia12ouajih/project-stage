<?php

use App\Http\Controllers\CasCivilController;
use App\Http\Controllers\CasDelisController;

use App\Http\Controllers\CasTypeController;
use App\Http\Controllers\User;
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
    Route::controller(User::class)->group(function(){
        // Route::get('/createUser','create');
        Route::get('voir_user','viewUsers')->name('viewAdminUser');
        Route::get('/editUser/{id}','editUser');
        Route::put('/modiUser/{id}','modifierUser');
        Route::get('/destroyUser/{id}','destroyUser');
    });

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
        Route::post('/voir_cas_civil/search', 'monthCasCivil');
        Route::get('/editCivil/{id}', 'editCivil');
        Route::put('/modCivil/{id}', 'modifierCivil');
        Route::get('/destroyCivil/{id}', 'destroyCivil');
        Route::get('/staticCasCivilAdmin', 'staticCasCivil');
        Route::post('/staticCasCivilAdmin/search', 'statisticC');
        
    });
    Route::controller(CasDelisController::class)->group(function () {
        Route::post('/data_delis/add', 'ajouteDelis');
        Route::get('/data_delis', 'createDelis')->name('ajouter_delis');
        Route::get('/voir_cas_delis', 'viewCasDelis')->name('viewCasDelisAdmin');
        Route::post('/voir_cas_delis/search', 'getData');
        Route::get('/editDelis/{id}', 'editDelis');
        Route::put('/modDelis/{id}', 'modifierDelis');
        Route::get('/destroyDelis/{id}', 'destroyDelis');
        Route::get('/staticCasDelisAdmin', 'staticCasDelis');
        Route::post('/staticCasDelisAdmin/search', 'statisticD');
    });
});


Route::prefix('user')->middleware('auth')->group(function(){
    Route::controller(CasCivilController::class)->group(function () {
        Route::post('/data_civil/add', 'ajouteCivil');
        Route::get('/data_civil_user', 'createCivil')->name('ajouter_civil_user');
        Route::get('/voir_cas_civil_user', 'viewCasCivil');
        Route::get('/staticCasCivilUser','staticCasCivil');
        Route::post('/staticCasCivil/search','StatisticC');
        Route::post('/casCivilT/search','CasCivilT');
    });
    Route::get('/printPage',function(){
        return view('user.printPage');
    });
    Route::controller(CasDelisController::class)->group(function () {
        Route::post('/data_delis/add', 'ajouteDelis');
        Route::get('/data_delis_user', 'createDelis')->name('ajouter_delis_user');
        Route::get('/voir_cas_delis_user', 'viewCasDelis')->name('viewCasDelis_user');
        Route::get('/staticCasDelisUser','staticCasDelis');
        Route::post('/staticCasDelis/search','StatisticD');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
