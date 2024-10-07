<?php 
use \App\Http\Controllers\CronController;


//index route
Route::get('index',[CronController::class,'index'])->name('index');

//show route
Route::get('show/{id}',[CronController::class,'show'])->name('show');

//create route
Route::post('store',[CronController::class,'store'])->name('store');;

//update route
Route::put('update/{id}',[CronController::class,'update'])->name('update');

//delete route

Route::delete('destroy/{id}',[CronController::class,'destroy'])->name('destroy');