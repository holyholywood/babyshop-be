<?php

use App\Http\Controllers\API\v1\ItemController;
use App\Http\Controllers\API\v1\AuthenticationController;
use App\Http\Controllers\API\v1\ExitItemController;
use App\Http\Controllers\API\v1\IncomingItemController;
use App\Http\Controllers\API\v1\StockController;
use App\Http\Controllers\API\v1\TransactionController;
use App\Http\Controllers\API\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return 'server is healthy';
});

Route::controller(AuthenticationController::class)->name('Auth')->prefix('auth')->group(function () {
    Route::post('/login', 'login')->name('login');
});

Route::controller(ItemController::class)->name('Items.')->prefix('/items')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::patch('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
});


Route::controller(StockController::class)->name('Stocks.')->prefix('/stocks')->group(function () {
    Route::get('/', 'index')->name('index');
});


Route::controller(TransactionController::class)->name('Transactions.')->prefix('/transactions')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::controller(IncomingItemController::class)->name('IncomingItem.')->prefix('/incomingitem')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::controller(ExitItemController::class)->name('ExitItem.')->prefix('/exititem')->group(function () {
    Route::get('/', 'index')->name('index');
});


Route::controller(AuthenticationController::class)->name('Authentication.')->prefix('/auth')->group(function () {
    Route::get('/', 'index')->name('index');
});


Route::controller(UserController::class)->name('Users.')->prefix('/users')->group(function () {
    Route::get('/', 'index')->name('index');
});
