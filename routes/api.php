<?php

use App\Http\Controllers\LinkController as CheckoutLinkController;
use App\Http\Controllers\OrderController as CheckoutOrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::get('links/{code}', [CheckoutLinkController::class, 'show']);
Route::Post('orders', [CheckoutOrderController::class, 'store']);
Route::Post('orders/confirm', [CheckoutOrderController::class, 'confirm']);

