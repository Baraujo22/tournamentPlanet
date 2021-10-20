<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helpController;
use App\Http\Controllers\modalityController;

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
Route::get('/help', [helpController::class, 'index'])->name('help');

Route::get('/designer', [modalityController::class, 'index'])->name('modality');


Route::post('/modalityformfetch', [modalityController::class, 'fetch'])->name('modalityform.fetch');

Route::get('/modalityformtarget', [modalityController::class, 'target'])->name('modalityform.target');

Route::post('/modalityformtargetsave', [modalityController::class, 'targetSave'])->name('modalityform.target');

Route::post('/submit', [modalityController::class, 'save'])->name('modalityFormSubmit');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

