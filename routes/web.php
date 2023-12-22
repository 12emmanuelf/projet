<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CoursierController;
use App\Http\Controllers\AbonnementController;


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
    return view('Master');
});

Route::get('/abonnemment',[AbonnementController::class,'index'])->name('abonn');



Route::controller(ClientController::class)->group(function () {

    Route::get('/client.index','index');
    Route::get('/client/create', 'create');
    Route::get('/client/{id}', 'show');
    Route::get('/client/{id}/edit', 'edit');


    Route::post('/client', 'store');
    Route::patch('/client/{id}', 'update');
    Route::delete('/client/{id}', 'destroy');

});



Route::controller(UserController::class)->group(function () {

    Route::get('/user.index', 'index')->name('utilisateurp');
    Route::get('/user/create', 'create');
    Route::get('/user/{id}', 'show');
    Route::get('/user/{id}/edit', 'edit');


    Route::post('/user', 'store');
    Route::patch('/user/{id}', 'update');
    Route::delete('/user/{id}', 'destroy');

});

Route::controller(CoursierController::class)->group(function () {

    Route::get('/coursier.index', 'index');
    Route::get('/coursier/create', 'create');
    Route::get('/coursier/{id}', 'show');
    Route::get('/coursier/{id}/edit', 'edit');


    Route::post('/coursier', 'store');
    Route::patch('/coursier/{id}', 'update');
    Route::delete('/coursier/{id}', 'destroy');

});


Route::controller(ColisController::class)->group(function () {

    Route::get('/colis.index', 'index');
    Route::get('/colis/create', 'create');
    Route::get('/colis/{id}', 'show');
    Route::get('/colis/{id}/edit', 'edit');


    Route::post('/colis', 'store');
    Route::patch('/colis/{id}', 'update');
    Route::delete('/colis/{id}', 'destroy');

});
