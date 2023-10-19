<?php

use App\Http\Controllers\SheetController;
use App\Http\Controllers\TaskController;
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
    return redirect()->route('sheet.index');
});
Route::resource('task',TaskController::class)->except(['create']);;
Route::resource('sheet',SheetController::class);
Route::get('sheet/{sheet_id}/task/create/{task_nr}', [TaskController::class, 'create'])
    ->name('task.create');