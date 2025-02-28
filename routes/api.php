<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
/*use App\Models\Post;*/
use App\Http\Controllers\PostController;

/*Route::post('/posts', function (Request $request) {
  $post = Post::create([
    'title' => $request->title,
    'content' => $request->content,
    'username' => $request->username
  ]);
  return response()->json(['message' => 'Post berhasil disimpan', 'data' => $post], 201);
});

Route::get('/posts', function () {
  return response()->json(Post::all());
});*/

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);