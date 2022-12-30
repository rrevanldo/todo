<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::middleware('isGuest')->group(function () {
    Route::get('/', [TodoController::class, 'login'])->name('login');
    Route::get('/register', [TodoController::class, 'register'])->name('register');
    Route::post('/register', [TodoController::class, 'inputRegister'])->name('register.post');
    Route::post('/login', [TodoController::class, 'auth'])->name('login.auth');

});

//logout
Route::get('/logout', [TodoController::class, 'logout'])->name('logout');

// halaman admin
Route::middleware('isLogin', 'CekRole:admin')->group(function() {
    Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
    Route::get('/todo/users', [TodoController::class, 'users'])->name('todo.users');
});

// halaman user dan admin
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function() {
    Route::get('/todo/', [TodoController::class, 'home'])->name('todo.index');
    Route::get('/todo/profile', [TodoController::class, 'profile'])->name('todo.profile');
    Route::get('/error', [TodoController::class, 'error'])->name('error');
    Route::get('/todo/profile/upload', [TodoController::class, 'profileUpload'])->name('todo.profile.upload');
    Route::patch('/todo/profile/change', [TodoController::class, 'changeProfile'])->name('todo.profile.change');
});

// halaman user
Route::middleware('isLogin', 'CekRole:user')->prefix('/todo')->name('todo.')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('index');
    Route::get('/complated', [TodoController::class, 'complated'])->name('complated');
    Route::get('/create', [TodoController::class, 'create'])->name('create');
    Route::post('/store', [TodoController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
    Route::patch('/complated/{id}', [TodoController::class, 'updateComplated'])->name('update-complated');
});

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');