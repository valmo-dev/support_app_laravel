<?php

use App\Http\Controllers\StatutController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/edit/{ticket}', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');

Route::get('/statuts', [StatutController::class, 'index'])->name('statuts.index');
Route::get('/statuts/create', [StatutController::class, 'create'])->name('statuts.create');
Route::post('/statuts', [StatutController::class, 'store'])->name('statuts.store');
Route::get('/statuts/edit/{statut}', [StatutController::class, 'edit'])->name('statuts.edit');
Route::put('/statuts/{statut}', [StatutController::class, 'update'])->name('statuts.update');
Route::delete('/statuts/{statut}', [StatutController::class, 'destroy'])->name('statuts.destroy');