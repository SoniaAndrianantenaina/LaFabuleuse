<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;

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
})->name('accueil');

Route::get('/hello', function () {
    return "hello";
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/connect', [LoginController::class, 'index'])->name('connectUser');
Route::post('/traitementInscription', [ClientController::class, 'index'])->name('traitementInscription');
