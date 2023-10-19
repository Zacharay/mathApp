<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return redirect()->route('task.create');
});
Route::get('/task/create', function () {
    return view('task.create');
})->name('task.create');
Route::get('/sheet/create', function () {
    return view('sheet.create');
});
