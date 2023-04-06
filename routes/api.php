<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TicketsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register/create-user', [AuthController::class, 'createUser'])->name('create-user');
Route::post('/login/check-user', [AuthController::class, 'loginUser'])->name('login-user');

Route::get('/ticket-menu', [TicketsController::class, 'showAllTicket'])->name('ticket-menu');
Route::get('/ticket-detail/{id}', [TicketsController::class, 'showTicketDetail'])->name('ticket-detail');
Route::get('/transaction-detail/{id}', [TransactionController::class, 'showTransactionDetail'])->name('transaction-detail');
Route::get('/pending-transaction', [TransactionController::class, 'showPendingTransaction'])->name('pending-transaction');
Route::get('/success-transaction', [TransactionController::class, 'showSuccessTransaction'])->name('success-transaction');
Route::get('/refund-transaction', [TransactionController::class, 'showRefundTransaction'])->name('refund-transaction');

Route::get('/admin', [DashboardController::class, 'counter'])->name('admin');
Route::apiResources(['admin-ticket' => TicketsController::class]);
Route::apiResources(['admin-catalogue' => CatalogueController::class]);
Route::apiResources(['admin-user' => UserController::class]);
Route::apiResources(['admin-transaction' => TransactionController::class]);
