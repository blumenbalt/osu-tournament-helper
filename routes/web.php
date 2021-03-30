<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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
    return view('app');
});

$team= TeamController::class;
Route::get('/team/create',[$team, 'create']);
Route::get('/team/{id}',[$team, 'show']);
Route::get('/team/{id}/edit',[$team, 'edit']);
Route::get('/team',[$team, 'index']);
Route::post('/team',[$team, 'store']);
Route::post('/team/{id}',[$team, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
