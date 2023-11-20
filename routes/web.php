<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\SettingController;

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
    return view('index');
});

Route::resource('phone', PhoneController::class);
Route::get('phone/view/{ide}',[PhoneController::class, 'view'])-> name('phone.view');

Route::get('setting',[SettingController::class, 'index'])-> name('setting.index');
Route::get('setting/showSelect',[SettingController::class, 'showSelect'])-> name('setting.showSelect');
Route::put('setting',[SettingController::class, 'update'])-> name('setting.update');