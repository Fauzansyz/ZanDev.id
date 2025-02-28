<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HandleCors;

Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware' => [ 'HandleCors', 'VerifyCsrfToken']], function () {
  Route::post('/posts', function (Request $request) {
    return response()->json(['message' => 'No CSRF needed']);
  });
});