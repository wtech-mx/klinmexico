<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SendEmailController;

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

Auth::routes();

    Route::group(['middleware' => ['auth']], function() {

    Route::get('send-email', [SendEmailController::class, 'index']);
//    Route::get('send-email', [App\Http\Controllers\SendEmailController::class, 'index']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', function () {
        return view('/home');
    });

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::resource('clients', App\Http\Controllers\ClientController::class);

    Route::post('/clients/crear', [App\Http\Controllers\ClientController::class, 'store_venta'])->name('clients.store_venta');

    Route::get('/ticket/index', [App\Http\Controllers\TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/crear', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket.create');

    Route::get('/ticket/crear#pills-Servicios', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket_tab.store_venta');
    Route::get('/ticket/crear#pills-Exito', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket_tab_exito.store');

    Route::post('/ticket/store', [App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
    Route::get('/ticket/view', [App\Http\Controllers\TicketController::class, 'view'])->name('ticket.view');
    Route::get('/ticket/edit/{id}', [App\Http\Controllers\TicketController::class, 'edit'])->name('ticket.edit');
    Route::post('/ticket/update/{id}', [App\Http\Controllers\TicketController::class, 'update'])->name('ticket.update');

    //Status
    Route::get('changeStatus', [App\Http\Controllers\TicketController::class, 'ChangeUserStatus'])->name('ticket.ChangeUserStatus');

    //email
    Route::get('/ticket/email/admin/{id}', [App\Http\Controllers\TicketController::class, 'email_admin'])->name('email_admin.email');
    Route::get('/ticket/email/user/{id}', [App\Http\Controllers\TicketController::class, 'email_user'])->name('email_user.email');
    Route::post('/ticket/email_send/admin/send', [App\Http\Controllers\TicketController::class, 'sed_mail'])->name('ticket.sed_mail');

    // usuarios
    Route::post('/ticket/store/usuario', [App\Http\Controllers\TicketController::class, 'store_venta'])->name('ticket.store_venta');
    Route::post('/ticket/store/precio', [App\Http\Controllers\TicketController::class, 'store_precio'])->name('ticket.store_precio');
    Route::post('/ticket/store/nano', [App\Http\Controllers\TicketController::class, 'store_nano'])->name('ticket.store_nano');


});


