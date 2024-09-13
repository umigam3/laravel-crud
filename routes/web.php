<?php

use Illuminate\Support\Facades\Route;
use App\UI\Http\Controllers\ProcedureController;

Route::get('/procedures', [ProcedureController::class, 'getAllProcedures'])->name('index');
Route::get('/procedure/create', [ProcedureController::class, 'createForm'])->name('create');
Route::get('/procedure/{id}', [ProcedureController::class, 'updateForm'])->name('update');

Route::post('/procedure/{id}', [ProcedureController::class, 'updateProcedure'])->name('updated');
Route::post('/procedure', [ProcedureController::class, 'createProcedure'])->name('created');

