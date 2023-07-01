<?php

use App\Http\Controllers\Employeecontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employees',[Employeecontroller::class,'index'])->name('employees.index');
Route::get('/employees/create',[Employeecontroller::class,'create'])->name('employees.create');
Route::post('/employees',[Employeecontroller::class,'store'])->name('employees.store');
Route::get('/employees/{employee}/edit',[Employeecontroller::class,'edit'])->name('employees.edit');
Route::put('/employees/{employee}',[Employeecontroller::class,'update'])->name('employees.update');
Route::delete('/employees/{employee}',[Employeecontroller::class,'destroy'])->name('employees.destroy');

