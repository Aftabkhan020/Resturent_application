<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get("/home",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"users"]);  ///foodmenu
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);//uploadfood
Route::post("/uploadfood",[AdminController::class,"uploadfood"]);///editChefs
Route::get("/editChefs",[AdminController::class,"editChefs"]);///uploadChef
Route::post("/uploadChef",[AdminController::class,"uploadChef"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);///deletechef
Route::get("/deletefood/{id}",[AdminController::class,"deletefood"]);

Route::get("/admin",[HomeController::class,"adminindex"]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

