<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});
