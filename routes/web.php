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

Route::get('/callback', function(){
    // dd($request->all());
    return view('users.callback');
});

Route::post('/token',function($code){
    redirect('https://osu.ppy.sh/oauth/token');
});


// Route::get('/authorize', function(){
//     error_log('teste');
//     $query = http_build_query([
//         'client_id' => '6689',
//         'redirect_uri' => 'http://127.0.0.1:8000/callback',
//         'response_type' => 'code',
//         'scope' => '',
//         'state' => '',
//     ]);
//     return redirect('https://osu.ppy.sh/oauth/authorize'.$query);
// });

// Route::get('/callback', function ($request){
//     dd($request->all());
// });