<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KnowledgeQuizController;
use App\Http\Controllers\PersonalQuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'login')->name('login');
Route::post('/', [AuthController::class, 'login'])->name('login');

Route::view('/register', 'register')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/profile', 'profile')->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile');

    Route::get('/personal', [PersonalQuizController::class, 'show'])->name('personal-quiz');
    Route::get('/knowledge', [KnowledgeQuizController::class, 'show'])->name('knowledge-quiz');

    Route::post('/response', [ResponseController::class, 'store'])->name('response');
});
