<?php
use App\Http\Controllers\WishController;
use Illuminate\Support\Facades\Route;

// show list
Route::get('/', [WishController::class, 'index']);

// add a wish
Route::post('/', [WishController::class, 'store']);

// delete a wish
Route::delete('/delete/{id}', [WishController::class, 'destory']);