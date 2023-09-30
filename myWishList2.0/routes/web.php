<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BoardManager;
use App\Http\Controllers\ListsManager;

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
})->name('home');

// AuthManager

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/checkiflogin', [AuthManager::class, 'checkiflogin'])->name('checkiflogin');

// BoardManager

Route::get('/board', [BoardManager::class, 'board'])->name('board');

Route::get('/getEmail', [BoardManager::class, 'getMail'])->name('getEmail');

Route::get('/checkListsExists', [BoardManager::class, 'checkListsExists'])->name('checkListsExists');

// Create List

Route::get('/createalist', [ListsManager::class, 'createList'])->name('createList');