<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('posts.home');
// });

Route::get('/dashboard', [MenuController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PostController::class, 'posts']);

Route::get('/detele', [PostController::class, 'delete']);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::put('/posts/{post}/edit', [PostController::class, 'edit']);
Route::resource('posts', PostController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
