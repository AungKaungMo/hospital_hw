<?php

use App\Http\Controllers\DoctorListController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrugStoreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomStatusController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UnreadMessageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Logging\Logging;

// App\Http\Controllers\HomeController
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

Route::resource('/', LoginController::class);
Route::post('/login/check', [LoginController::class, 'check']);
Route::resource('/signup', SignUpController::class);

// Route::middleware(['loginCheck'])->group(function () {
Route::resource('/home', HomeController::class);
Route::resource('/roomstatus', RoomStatusController::class);
Route::resource('/drugstore', DrugStoreController::class);
Route::resource('/appointment', AppointmentController::class);
Route::resource('/unreadmessage', UnreadMessageController::class);
// });
Route::get('/lang/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::resource('/doctorList', DoctorListController::class);
