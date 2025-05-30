<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [WorkerController::class , 'index'])->name('worker.index');
Route::get('/workers/create', [ WorkerController::class , 'create'])->name('worker.create');

Route::get('/workers/{worker}', [ WorkerController::class , 'show'])->name('worker.show');
Route::post('/workers', [ WorkerController::class , 'store'])->name('worker.store');

Route::get('/workers/update', [ WorkerController::class , 'update']);
Route::get('/workers/delete', [ WorkerController::class , 'delete']);
