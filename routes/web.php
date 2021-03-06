<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
// Route::post('/contact', [FrontendController::class, 'contactPost']);

Route::post('/contact-post', [FrontendController::class, 'contactPost'])->name('contactPost');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/service', [FrontendController::class, 'service'])->name('service');

Route::get('/pages', [FrontendController::class, 'service'])->name('service');
//
Route::get('/dashboard', function () {
   //  return view('dashboard');
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
