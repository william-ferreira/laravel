<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource (Only modify what have been changed)
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/

// GET
Route::get('/blog', [PostsController::class, 'index']);
//Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id');
//Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name');

Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
    ->whereNumber('id')
    ->whereAlpha('name');

// POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

// PUT OR PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);

// DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);

//Route::resource('blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);

// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

// Return view
//Route::view('/blog', 'blog.index', ['name' => 'Code with me']);