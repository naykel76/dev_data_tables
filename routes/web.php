<?php

use App\Livewire\Order\OrderTable;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/orders')->name('home');

Route::get('/orders', OrderTable::class)->name('orders');
