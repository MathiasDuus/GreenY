<?php

use App\Http\Controllers\AirPollutionControllerAPI;
use App\Http\Controllers\TemperatureControllerAPI;
use App\Http\Controllers\LocationControllerAPI;
use App\Http\Controllers\HumidityControllerAPI;
use App\Http\Controllers\LightControllerAPI;
use App\Http\Controllers\CityControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::group([], function () {
//     Route::apiResource('/city', CityControllerAPI::class);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| City endpoints
|--------------------------------------------------------------------------
 */
Route::name('cities.')->controller(CityControllerAPI::class)->prefix('cities')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{city}', 'show')->name('show');
    Route::patch('/{city}', 'update')->name('update');
    Route::delete('/{city}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Light endpoints
|--------------------------------------------------------------------------
 */
Route::name('lights.')->controller(LightControllerAPI::class)->prefix('lights')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{light}', 'show')->name('show');
    Route::patch('/{light}', 'update')->name('update');
    Route::delete('/{light}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Humidity endpoints
|--------------------------------------------------------------------------
 */
Route::name('humidities.')->controller(HumidityControllerAPI::class)->prefix('humidities')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{humidity}', 'show')->name('show');
    Route::patch('/{humidity}', 'update')->name('update');
    Route::delete('/{humidity}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Location endpoints
|--------------------------------------------------------------------------
 */
Route::name('locations.')->controller(LocationControllerAPI::class)->prefix('locations')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{location}', 'show')->name('show');
    Route::patch('/{location}', 'update')->name('update');
    Route::delete('/{location}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Temperature endpoints
|--------------------------------------------------------------------------
 */
Route::name('temperatures.')->controller(TemperatureControllerAPI::class)->prefix('temperatures')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{temperature}', 'show')->name('show');
    Route::patch('/{temperature}', 'update')->name('update');
    Route::delete('/{temperature}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| AirPollution endpoints
|--------------------------------------------------------------------------
 */
Route::name('air-pollutions.')->controller(AirPollutionControllerAPI::class)->prefix('air-pollutions')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{airPollution}', 'show')->name('show');
    Route::patch('/{airPollution}', 'update')->name('update');
    Route::delete('/{airPollution}', 'destroy')->name('destroy');
});

