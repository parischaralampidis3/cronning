<?php 
use \App\Http\Controllers\CronController;


//index route
Route::get('index',[CronController::class,'index'])->name('index');

//show route
Route::get('show/{cronner:id}',[CronController::class,'show'])->name('show');

//create route
Route::get('store',[CronController::class,'create'])->name('create');;

//store route
Route::post('store',[CronController::class,'store'])->name('store');