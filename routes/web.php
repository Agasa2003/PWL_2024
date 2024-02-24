<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

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


Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
 return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang';
   });

   Route::get('/about', function () {
    return 'NIM : 2141762124 dan Nama : Ananda Galang Saputra';
   });


Route::get('/user/{Galang?}', function ($name='Galang') {
    return 'Nama Saya : '.$name;
});

Route::get('/posts/{posts}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-: 1'.$postId."Komentar ke-: 1 ".$commentId;
});

Route::get('/articles/{id}', function($id){
    return "Halaman Artikel dengan ID : ".$id;
});

Route::get('/about/{index}', function($index){
    return "Selamat Datang Di Pemograman Web Lanjut ".$index;
});