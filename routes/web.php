<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('https://naveen7674.github.io/', function () {
    return view('/welcome');
});
Route::view('/contact', 'contact');
Route::view('https://naveen7674.github.io/Naveen-Goud/about', 'about');
