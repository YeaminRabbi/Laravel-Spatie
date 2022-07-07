<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssigningController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('role/{role}', [RoleController::class, 'createRole'])->name('CreateRole');
Route::get('permission/{permission}', [PermissionController::class, 'createPermission'])->name('CreatePermission');


Route::get('assign/{id}/{role}', [AssigningController::class, 'assignUserRole'])->name('assignUserRole');

