<?php

use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\ArchivesViewController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IndexController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [IndexController::class, 'index']);
Route::get('/archives_view', [ArchivesViewController::class, 'archives']);
Route::get('/events_view', [EventsController::class, 'events']);
Route::get('AbtUs',[AdditionalController::class, 'AbtUs']);
