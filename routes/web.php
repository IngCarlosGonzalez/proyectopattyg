<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Zprueba1Controller;
use App\Http\Controllers\Zprueba2Controller;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get(
        '/dashboard', 
        [DashboardController::class, 'asegun'])
    ->name('dashboard');

    Route::get(
        '/zprueba1', 
        [Zprueba1Controller::class, 'muestra'])
    ->name('zprueba1');

    Route::get(
        '/zprueba2', 
        [Zprueba2Controller::class, 'muestra'])
    ->name('zprueba2');

});
