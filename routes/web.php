<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacesController;

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
    return view('index');
});

// Route::get('/placesDB', function () {
//     return view('placesDB');
// });
// Route::get('/places', function () {
//     return view('places');
// });
Route::get('places', [PlacesController::class, 'index']);
Route::get('deletePlace/{id}', [PlacesController::class, 'delete']);
