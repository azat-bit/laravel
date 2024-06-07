<?php

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RezervationsController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [UserController::class, "index"])->name("user.login");
Route::get("/anasayfa",[NavbarController::class,"login"])->name("anasayfa");
Route::get("/turlar",[NavbarController::class,"turlar"])->name("turlar");
Route::get("/oteller",[NavbarController::class,"oteller"])->name("oteller");
Route::get("/galeri",[NavbarController::class,"galeri"])->name("galeri");
Route::get("/iletisim",[NavbarController::class,"iletisim"])->name("iletisim");

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('/user.login');
//Rezarvation;
//Route::post("/save/{id}",[RezervationsController::class,"save"])->name("rezartaviton.save");

 require __DIR__.'/auth.php';
