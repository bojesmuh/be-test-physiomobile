<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,"index"])->name("beranda");
Route::get("/tentang-kami", [HomeController::class,"about"])->name("tentang-kami");
Route::get("/blog", [HomeController::class,"blog"])->name("blog");

// Route::get('/', function () {
//     return response()->json([
//         'code' => 404,
//         'message'=>'Not Found'
//     ],404);
// });
