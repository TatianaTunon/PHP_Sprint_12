<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipsFutbolController;
use App\Http\Controllers\partitsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//CRUD LigaFutbol
   //Index
   Route::get('/equips', [EquipsFutbolController::class, 'index'])->name('equips.index');

   //Create
    Route::get('/equips/create', [EquipsFutbolController::class, 'create'])->name('equips.create');
    Route::post('/equips', [EquipsFutbolController::class, 'store'])->name('equips.store');
    
    //Show
    Route::get('/equips/{id}', [EquipsFutbolController::class, 'show'])->name('equips.show');
    
    //Edit
    Route::get('/equips/{equips}/edit', [EquipsFutbolController::class, 'edit'])->name('equips.edit');
    Route::put('/equips/{equips}', [EquipsFutbolController::class, 'update'])->name('equips.update');

    //Borrar
    Route::delete('/equips/{equips}', [EquipsFutbolController::class, 'destroy'])->name('equips.destroy');


//CRUD Partits
   //Index
    Route::get('/partits', [partitsController::class, 'index'])->name('partits.index');

   //Create
    Route::get('/partits/create', [partitsController::class, 'create'])->name('partits.create');
    Route::post('/partits', [partitsController::class, 'store'])->name('partits.store');
  
    //Edit
    Route::get('/partits/{partits}/edit', [partitsController::class, 'edit'])->name('partits.edit');
    Route::put('/partits/{partits}', [partitsController::class, 'update'])->name('partits.update');

    //Borrar
    Route::delete('/partits/{partits}', [partitsController::class, 'destroy'])->name('partits.destroy');
