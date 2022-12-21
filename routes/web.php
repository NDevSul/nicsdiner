<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
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



Route::get("/", [HomeController::class, "index"]);
Route::get("/menu", [HomeController::class, "menu"]);

Route::get("/users", [AdminController::class, "user"]);
Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);


Route::get("/foodmenu", [AdminController::class, "foodmenu"]);
Route::post("/uploadfood", [AdminController::class, "upload"]);
Route::get("/deletemenu/{id}", [AdminController::class, "deletemenu"]);
Route::get("/updatemenu/{id}", [AdminController::class, "updatemenu"]);
Route::post("/update/{id}", [AdminController::class, "update"]);


Route::get("/viewgallery", [AdminController::class, "viewgallery"]);
Route::post("/uploadgallery", [AdminController::class, "uploadgallery"]);
Route::get("/updategallery/{id}", [AdminController::class, "updategallery"]);
Route::post("/updatefoodgallery/{id}", [AdminController::class, "updatefoodgallery"]);
Route::get("/deletegallery/{id}", [AdminController::class, "deletegallery"]);


Route::post("/addcart/{id}", [HomeController::class, "addcart"]);
Route::get("/showcart/{id}", [HomeController::class, "showcart"]);
Route::get("/remove/{id}", [HomeController::class, "remove"]);



Route::post("/orderconfirm", [HomeController::class, "orderconfirm"]);
Route::get("/orders", [AdminController::class, "orders"]);
Route::get("/deleteorder/{id}", [AdminController::class, "deleteorder"]);

Route::post("/addtestimony", [HomeController::class, "addtestimony"]);
Route::get("/showtestimony/{id}", [HomeController::class, "showtestimony"]);


Route::get("/redirects", [HomeController::class, "redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
