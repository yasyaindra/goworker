<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskerController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/services',  [HomeController::class, 'services'])->name('services');
Route::get('/login',  fn() => view('auth.login'))->name('login');
Route::get('/register',  fn() => view('auth.register'))->name('register');
Route::get('/dashboard',  fn() => view('user.dashboard'))->name('dashboard')->middleware('auth');
Route::get('/task',  fn() => view('user.task'))->name('task');
Route::get('/account',  fn() => view('user.account'))->name('account')->middleware('auth');
Route::get('/become-tasker',  [TaskerController::class, 'become_tasker'])->name('become-tasker');
Route::post('/become-tasker/{id}',  [TaskerController::class, 'update'])->name('become-tasker.update');

Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
