<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

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
//Route::get('chart/{location_id}', ChartController::class);
/*
Route::name('chart')->controller(ChartController::class)->prefix('chart')->group(
    function () {
        Route::get('/{location_id', 'index')->name('index');
    }
);*/

Route::get('/chart/{location_id}', [ChartController::class, 'index'])->name('chart');

Route::get('/', function () {
    return view('welcome');
});
