<?php

use App\Http\Controllers\LandingController;
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
Route::get('/invitaciones', [LandingController::class, 'invitations']);

Route::get('/', [LandingController::class, 'index']);
Route::get('/{key}', [LandingController::class, 'index'])->name('invitation');
Route::post('/{key}', [LandingController::class, 'confirmInvitee']);

