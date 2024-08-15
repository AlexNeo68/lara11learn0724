<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisteredController;

Route::get("/test", function () {
    Mail::to("alexneovic@gmail.com")->send(new JobPosted());
    return 'done';
});

Route::view('/', 'home');
Route::view('/contacts', 'contacts');


Route::resource('jobs', JobController::class)->middleware(['auth', 'can:edit,job'])->except(['index', 'show', 'create', 'store']);
Route::resource('jobs', JobController::class)->middleware('auth')->only(['create', 'store']);
Route::resource('jobs', JobController::class)->only(['index', 'show']);

Route::get('/register', [UserRegisteredController::class, 'create'])->name('register');
Route::post('/register', [UserRegisteredController::class, 'store'])->name('user_create');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login_store');
Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');

