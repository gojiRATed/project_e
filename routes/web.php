<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewsAppController;
use App\Http\Controllers\ViewsPublicController;

Route::get('/', function () {
  return view('public.landing');
});

Route::get('/dashboard', [ViewsAppController::class, 'halamanUtama'])->name('dashboard');

Route::get('/fitur', [ViewsPublicController::class, 'fiturIndex'])->name('fitur.index');




// Route::group(['auth', 'verified', 'middleware' => ['role:superadmin']], function () {
//   Route::get('/dashboard', function () {
//     return view('dashboard');
//   })->name('dashboard');
// });
Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
