<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/{id}/answer', [CategoryController::class, 'answer'])->name('category.answer');
    Route::get('/category/{category}/answer/clear', [CategoryController::class, 'clearAnswers'])->name('category.clear.answers');
    Route::get('/category/{category}/finish', [CategoryController::class, 'finish'])->name('category.finish');

    Route::get('/flashcard/create', [FlashcardController::class, 'create'])->name('flashcard.create');
    Route::post('/flashcard', [FlashcardController::class, 'store'])->name('flashcard.store');
});
