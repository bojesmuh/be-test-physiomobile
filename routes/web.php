<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'code' => 404,
        'message'=>'Not Found'
    ],404);
});
