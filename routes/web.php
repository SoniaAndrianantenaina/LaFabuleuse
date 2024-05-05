<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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

Route::get('/reservation', function () {
    return view('reservation/booking');
})->name('booking');

Route::get('/liste-des-services', [ServiceController::class, "getAllServices"]);
// Route::get('/liste-des-services', function () {
//     return view('serviceList');
// });

// Envoi Mail
Route::get('/testEnvoi', [MailController::class, 'testEnvoi'])->name('testEnvoi');
Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/connect', [LoginController::class, 'index'])->name('connectUser');
Route::post('/traitementInscription', [ClientController::class, 'ajoutClient'])->name('traitementInscription');
