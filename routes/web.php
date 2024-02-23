<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Welcome';
});

Route::get('/hello', function () {
 return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
   });

   Route::get('/about', function () {
    return 'Name : Lenka Melinda Florienka 
    <br> NIM : 2241720074';
   });

   Route::get('/user/{name}', function ($name) {
    return 'My name is '.$name;
    });

    Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($Id) {
 return 'Article Page with ID '.$Id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'My name is '.$name;
    });

