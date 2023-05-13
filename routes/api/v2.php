<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes v2
|--------------------------------------------------------------------------
*/

Route::get('/demo', function () {
    return response()->json(['data'=> 'point demo v2 :)'], 200);
});
