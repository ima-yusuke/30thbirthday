<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\AdminController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ユーザーview
    Route::get("/",[BirthdayController::class,"ShowOpening"]);
    Route::get("/birthday",[BirthdayController::class,"ShowIndex"])->name("ShowIndex");
    Route::get("/list",[BirthdayController::class,"ShowList"])->name("ShowList");
    Route::post("/list",[BirthdayController::class,"AddList"])->name("AddList");
    Route::patch("/list",[BirthdayController::class,"ToggleList"])->name("ToggleList");
    Route::delete("/list",[BirthdayController::class,"DeleteList"])->name("DeleteList");

    //投稿
    Route::get("/dashboard/post",[AdminController::class,"ShowPostPage"])->name("ShowPostPage");
    Route::post("/dashboard/post",[AdminController::class,"AddPost"])->name("AddPost");
    Route::post('/dashboard/post/{id}', [AdminController::class,"UpdatePost"])->name('UpdatePost');
    Route::delete("/dashboard/post",[AdminController::class,"DeletePost"])->name("DeletePost");
    Route::post("/dashboard/toggle-post",[AdminController::class,"TogglePost"])->name("TogglePost");
});

require __DIR__.'/auth.php';
