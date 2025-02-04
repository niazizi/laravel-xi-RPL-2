<?php

use App\Http\Controllers\{
    GenreController,
    guestbook,
    CastController

};

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});


route::get('/genre/create', [GenreController::class, 'create'])-> name('genre.create');
route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.delete');

//route casts
route::get('/cast', [CastController::class, 'index'])->name('cast.index');
route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
route::post('/cast', [CastController::class, 'store'])->name('cast.store');
route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
route::delete('/cast{id}', [CastController::class, 'destroy'])->name('cast.delete');