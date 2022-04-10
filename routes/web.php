<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
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


$user= UserController::class;

Route::get('/', function () {
    return view('app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('teams.')->group(function () {

    $team= TeamController::class;

    Route::get('/teams/create',[$team, 'create'])->name('create');
    Route::get('/teams/{id}',[$team, 'show'])->name('show');
    Route::get('/teams/{id}/edit',[$team, 'edit'])->name('edit');
    Route::get('/teams',[$team, 'index'])->name('index');
    Route::post('/teams',[$team, 'store'])->name('save');
    Route::post('/teams/{id}',[$team, 'update'])->name('update');
});

Route::get('/callback', [$user, 'oauth']);
