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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('employee', \App\Http\Controllers\EmployeeController::class);
Route::resource('department', \App\Http\Controllers\DepartmentController::class);
Route::resource('position', \App\Http\Controllers\PositionController::class);

Route::resource('roles', \App\Http\Controllers\RoleController::class);
Route::resource('permissions', \App\Http\Controllers\PermissionController::class);

Route::get('/test_bot',function (){
    $model = User::first();
    \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot7163412262:AAEe4_eAyM42zgYS9zegoGBZ_aRiGiDztqg/sendMessage',[
        'chat_id' => 789526554,
        'text' => 'Hello world',
        'parse_mode' => 'html'
    ]);
});
