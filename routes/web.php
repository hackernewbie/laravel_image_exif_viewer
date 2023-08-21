<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManager;

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
    return view('welcome');
});

Route::get('check-exif', function(){
    $image  =   Image::make('t.jpg')->exif();
    print_r ($image);
    //$image= Image::make('t.jpeg')->exif('Model');
    dd($image);
});
