<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\CheckIsAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/force-logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/home', function () {
    return redirect()->route('groups.index');
});

Auth::routes();

Route::middleware([CheckIsAuth::class])->group(function () {
    Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
    Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
    Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show');

    Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');
});
