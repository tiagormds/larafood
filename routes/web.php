<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::delete('admin/plans/destroy/{url}', ['App\Http\Controllers\Admin\PlanController', 'destroy'])->name('plans.destroy');
Route::get('admin/plans/show/{url}', ['App\Http\Controllers\Admin\PlanController', 'show'])->name('plans.show');
Route::post('admin/plans/store', ['App\Http\Controllers\Admin\PlanController', 'store'])->name('plans.store');
Route::get('admin/plans/create', ['App\Http\Controllers\Admin\PlanController', 'create'])->name('plans.create');
Route::get('admin/plans', ['App\Http\Controllers\Admin\PlanController', 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
