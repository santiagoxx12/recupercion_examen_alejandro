<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\OriginController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TypePayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players/listar',[PlayerController::class,'index'])->name('player.index');
Route::get('/players/create',[PlayerController::class,'create']);
Route::post('/players/store', [PlayerController::class,'store'])->name('player.store');
Route::get('/player/{player}',[PlayerController::class,'show'])->name('player.show');
Route::put('/player/{player}',[PlayerController::class,'update'])->name('player.update');
Route::delete('/player/{player}',[PlayerController::class,'destroy'])->name('player.destroy');
Route::get('/player/{player}/editar',[PlayerController::class,'edit'])->name('player.edit');

Route::get('/goals/listar',[GoalController::class,'index'])->name('goal.index');
Route::get('/goals/create',[GoalController::class,'create']);
Route::post('/goals/store', [GoalController::class,'store'])->name('goal.store');
Route::get('/goal/{goal}',[GoalController::class,'show'])->name('goal.show');
Route::put('/goal/{goal}',[GoalController::class,'update'])->name('goal.update');
Route::delete('/goal/{goal}',[GoalController::class,'destroy'])->name('goal.destroy');
Route::get('/goal/{goal}/editar',[GoalController::class,'edit'])->name('goal.edit');

Route::get('/pays/listar',[PayController::class,'index'])->name('pay.index');
Route::get('/pays/create',[PayController::class,'create']);
Route::post('/pays/store', [PayController::class,'store'])->name('pay.store');
Route::get('/pay/{pay}',[PayController::class,'show'])->name('pay.show');
Route::put('/pay/{pay}',[PayController::class,'update'])->name('pay.update');
Route::delete('/pay/{pay}',[PayController::class,'destroy'])->name('pay.destroy');
Route::get('/pay/{pay}/editar',[PayController::class,'edit'])->name('pay.edit');

Route::get('/type_Pays/listar',[TypePayController::class,'index'])->name('type_Pay.index');
Route::get('/type_Pays/create',[TypePayController::class,'create']);
Route::post('/type_Pays/store', [TypePayController::class,'store'])->name('type_Pay.store');
Route::get('/type__pay/{type__pay}',[TypePayController::class,'show'])->name('type_Pay.show');
Route::put('/type__pay/{type__pay}',[TypePayController::class,'update'])->name('type_Pay.update');
Route::delete('/type__pay/{type__pay}',[TypePayController::class,'destroy'])->name('type_Pay.destroy');
Route::get('/type__pay/{type__pay}/editar',[TypePayController::class,'edit'])->name('type_Pay.edit');

Route::get('/journeys/listar',[JourneyController::class,'index'])->name('journey.index');
Route::get('/journeys/create',[JourneyController::class,'create']);
Route::post('/journeys/store', [JourneyController::class,'store'])->name('journey.store');
Route::get('/journey/{journey}',[JourneyController::class,'show'])->name('journey.show');
Route::put('/journey/{journey}',[JourneyController::class,'update'])->name('journey.update');
Route::delete('/journey/{journey}',[JourneyController::class,'destroy'])->name('journey.destroy');
Route::get('/journey/{journey}/editar',[JourneyController::class,'edit'])->name('journey.edit');

Route::get('/origins/listar',[OriginController::class,'index'])->name('origin.index');
Route::get('/origins/create',[OriginController::class,'create']);
Route::post('/origins/store', [OriginController::class,'store'])->name('origin.store');
Route::get('/origin/{origin}',[OriginController::class,'show'])->name('origin.show');
Route::put('/origin/{origin}',[OriginController::class,'update'])->name('origin.update');
Route::delete('/origin/{origin}',[OriginController::class,'destroy'])->name('origin.destroy');
Route::get('/origin/{origin}/editar',[OriginController::class,'edit'])->name('origin.edit');

