<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalSpaceController;
use App\Http\Controllers\FscharacterController;
use App\Http\Controllers\FseachcharacterController;
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

// Route::get('/finalspace', [FinalSpaceController::class, 'finalspace']);

Route::get('/', function(){
    return view('finalspace');
});

Route::get('/characters', [FscharacterController::class, 'fscharacter']);

Route::get('/characters/{id}', [FseachcharacterController::class, 'fseachcharacter']);