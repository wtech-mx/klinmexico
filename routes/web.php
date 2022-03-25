<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('clients', ClientController::class);

    Route::get('/ticket/index', [App\Http\Controllers\TicketController::class, 'index'])->name('index.ticket');
    Route::get('/ticket/crear', [App\Http\Controllers\TicketController::class, 'crear'])->name('crear.ticket');
    Route::get('/ticket/store', [App\Http\Controllers\TicketController::class, 'store'])->name('store.ticket');
    Route::get('/ticket/index', [App\Http\Controllers\TicketController::class, 'view'])->name('view.ticket');
});


