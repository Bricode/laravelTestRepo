<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello this is my first post',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing'
//     ];
    
//     return view('post', [
//         'post' => $posts[$post]
//     ]);    
// });

Route::get('/posts/{post}', 'PostsController@show');