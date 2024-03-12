<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/edit/{ticket}', [TicketController::class, 'edit'])->name('tickets.edit');
Route::post('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');