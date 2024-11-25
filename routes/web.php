<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibleController;
use App\Http\Livewire\BibleViewer;


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

Route::get('/daily-verse', [BibleController::class, 'dailyVerse']);

Route::get('/', BibleViewer::class);

Route::get('/', function () {
    return view('welcome');
});
