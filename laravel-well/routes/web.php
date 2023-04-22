<?php

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

Route::get('/', function () {
    return view('welcome');
});



// tinh-toan là đường dẫn  URL để truy cập trang tính toán 
// Route::get('tinh-toan', [App\Http\Controllers\myController::class, 'index']);
// Route::post('tinh-toan', [App\Http\Controllers\myController::class, 'tong']);

// Route::post()
// Route::get('/welcome',function() {
//     return "xin chào bạn đẫ đến đây vì tôi";
// });

// Route::get('test',[App\Http\Controllers\userController::class,'xinchao']);

// Route::get('sum', [App\Http\Controllers\sumController::class, 'index']);
// Route::post('sum', [App\Http\Controllers\sumController::class, 'tinhtong']);
Route::get('areaOfShape', [App\Http\Controllers\AreaofshapeController::class, 'computerArea']);
Route::post('areaOfShape', [App\Http\Controllers\AreaofshapeController::class, 'areaOfShape']);