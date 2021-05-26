<?php

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

Route::get('/', function () {
    return redirect('/cars');
});
Route::get('/cars', [\App\Http\Controllers\CarController::class, "viewList"])->name("Cars");
Route::get('/cars/form/{objId?}', [\App\Http\Controllers\CarController::class, "viewForm"])->name("Cars");
Route::post('/cars/form/{objId?}', [\App\Http\Controllers\CarController::class, "processForm"])->name("Cars");
Route::get('/cars/delete/{objId}', [\App\Http\Controllers\CarController::class, "deleteById"])->name("Cars");

Route::get('/details', [\App\Http\Controllers\DetailController::class, "viewList"])->name("Details");
Route::get('/details/form/{objId?}', [\App\Http\Controllers\DetailController::class, "viewForm"])->name("Details");
Route::post('/details/form/{objId?}', [\App\Http\Controllers\DetailController::class, "processForm"])->name("Details");
Route::get('/details/delete/{objId}', [\App\Http\Controllers\DetailController::class, "deleteById"])->name("Details");

Route::get('/detailHistories', [\App\Http\Controllers\DetailHistoryController::class, "viewList"])->name("DetailHistories");
Route::get('/detailHistories/form/{objId?}', [\App\Http\Controllers\DetailHistoryController::class, "viewForm"])->name("DetailHistories");
Route::post('/detailHistories/form/{objId?}', [\App\Http\Controllers\DetailHistoryController::class, "processForm"])->name("DetailHistories");
Route::get('/detailHistories/delete/{objId}', [\App\Http\Controllers\DetailHistoryController::class, "deleteById"])->name("DetailHistories");

Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, "viewList"])->name("Employees");
Route::get('/employees/form/{objId?}', [\App\Http\Controllers\EmployeeController::class, "viewForm"])->name("Employees");
Route::post('/employees/form/{objId?}', [\App\Http\Controllers\EmployeeController::class, "processForm"])->name("Employees");
Route::get('/employees/delete/{objId}', [\App\Http\Controllers\EmployeeController::class, "deleteById"])->name("Employees");

Route::get('/workTypes', [\App\Http\Controllers\WorkTypeController::class, "viewList"])->name("WorkTypes");
Route::get('/workTypes/form/{objId?}', [\App\Http\Controllers\WorkTypeController::class, "viewForm"])->name("WorkTypes");
Route::post('/workTypes/form/{objId?}', [\App\Http\Controllers\WorkTypeController::class, "processForm"])->name("WorkTypes");
Route::get('/workTypes/delete/{objId}', [\App\Http\Controllers\WorkTypeController::class, "deleteById"])->name("WorkTypes");

Route::get('/works', [\App\Http\Controllers\WorkController::class, "viewList"])->name("Works");
Route::get('/works/form/{objId?}', [\App\Http\Controllers\WorkController::class, "viewForm"])->name("Works");
Route::post('/works/form/{objId?}', [\App\Http\Controllers\WorkController::class, "processForm"])->name("Works");
Route::get('/works/delete/{objId}', [\App\Http\Controllers\WorkController::class, "deleteById"])->name("Works");
