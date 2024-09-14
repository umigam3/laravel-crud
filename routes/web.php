<?php

use Illuminate\Support\Facades\Route;
use App\UI\Http\Controllers\ProcedureController;

// Get methods.
Route::get('/procedures', [ProcedureController::class, 'listProcedures'])->name('index');
Route::get('/procedure/create', [ProcedureController::class, 'createForm'])->name('create');
Route::get('/procedure/{id}', [ProcedureController::class, 'updateForm'])->name('update');
Route::get('/procedure/{id}/details', [ProcedureController::class, 'procedureDetails'])->name('details');

// Post methods.
Route::post('/procedure/{id}', [ProcedureController::class, 'updateProcedure'])->name('updated');
Route::post('/procedure', [ProcedureController::class, 'createProcedure'])->name('created');

// Delete methods.
Route::delete('/procedures/{id}', [ProcedureController::class, 'delete'])->name('delete');

// API Endpoint
Route::get('api/procedures', [ProcedureController::class, 'getProcedures']);
