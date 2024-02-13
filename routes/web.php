<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

// Route::resource('students', StudentController::class);

Route::resource('nilai', NilaiController::class);

// Route::get('students/{id_student}', [StudentController::class,'show']);

// Route::get('student/{id}', [StudentController::class, 'show']);

Route::prefix('students')->controller(StudentController::class)->name('students.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id_student}', 'show')->name('show');
    Route::get('/edit/{id_student}', 'edit')->name('edit');
    Route::put('/update', 'update')->name('update');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
