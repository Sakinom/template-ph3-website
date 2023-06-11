<?php

use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;






// Route::get('/test', [TestController::class, 'test'])->name('test');

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
    return view('welcome');
});

// リソースコントローラ
Route::resource('post', PostController::class);

Route::get('/users', [UserController::class, 'users']);

// Route::get('post/create', [PostController::class, 'create'])->middleware(['auth', 'admin']);

// Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('post', [PostController::class, 'index'])->name('post.index');
    Route::get('post/create', [PostController::class, 'create']);
// });

// トップページ表示
Route::get('/toppage', function () {
    return view('toppage');
});

// Route::post('post', [PostController::class, 'store'])->name('post.store');

// Route::get('post', [PostController::class, 'index'])->name('post.index');

// // 単独表示
// Route::get('post/show/{post}', [PostController::class, 'show'])->name('post.show');

// // 編集
// Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

// // 更新
// Route::patch('post/{post}', [PostController::class, 'update'])->name('post.update');

// // 削除
// Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

// ダッシュボード表示
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

