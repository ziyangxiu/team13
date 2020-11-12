<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\PurchaseRecordController;
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



Route::get('member/', [MemberController::class, 'index']);

Route::get('member/create', [MemberController::class, 'create']);

Route::get('member/edit/{id}', [MemberController::class, 'edit'])->where('id','[0-9]+');

Route::get('member/show/{id}', [MemberController::class, 'show'])->where('id','[0-9]+');;

Route::get(' purchase/', [PurchaseRecordController::class, 'index']);

Route::get(' purchase/create', [PurchaseRecordController::class, 'create']);

Route::get(' purchase/edit/{id}', [PurchaseRecordController::class, 'edit'])->where('id','[0-9]+');;

Route::get(' purchase/show/{id}', [PurchaseRecordController::class, 'show'])->where('id','[0-9]+');;

