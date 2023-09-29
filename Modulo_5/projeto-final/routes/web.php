<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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

// GET ROUTES
Route::group(['middleware' => 'web'], function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/addgame', [GameController::class, 'addGame'])->name('addGame');
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::get('/myGames', [MainController::class, 'myGames'])->name('myGames');
    Route::get('/gamePage/{id}', [GameController::class, 'gamePage'])->name('gamePage');
    Route::get('/deleteGame/{id}', [GameController::class, 'deleteGame'])->name('deleteGame');
    Route::get('/editGame/{id}', [GameController::class, 'editGame'])->name('editGame');
    Route::get('/deleteGame/{id}', [GameController::class, 'deleteGame'])->name('deleteGame');
});

// POST ROUTES
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/createUser', [AuthController::class, 'createUser'])->name('createUser');
Route::post('/updatePassword', [AuthController::class, 'updatePassword'])->name('updatePassword');
Route::post('/updateInfo', [AuthController::class, 'updateInfo'])->name('updateInfo');
Route::post('/creategame', [GameController::class, 'createGame'])->name('createGame');

//PUT ROUTES
Route::put('/updateGame/{id}', [GameController::class, 'updateGame'])->name('updateGame');
