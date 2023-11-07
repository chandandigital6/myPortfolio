<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServiceDetails;
use App\Livewire\ShowTeam;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', ShowHome::class)->name('home');
Route::get('/service', ShowService::class)->name('service');
Route::get('/serviceDetail/{id}', ShowServiceDetails::class)->name('serviceDetails');
Route::get('/team', ShowTeam::class)->name('team');
