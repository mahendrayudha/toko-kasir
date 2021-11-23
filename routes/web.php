<?php

use App\Http\Controllers\{
    BannerController,
    DashboardController,
    LandingPageController,
    SettingController,
};
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
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/banner', [BannerController::class, 'index'])->name('banner');

    Route::get('/landing_page', [LandingPageController::class, 'index'])->name('landingpage');
    Route::post('/landing_page/update', [LandingPageController::class, 'update']);

    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/setting/first', [SettingController::class, 'show'])->name('setting.show');
    Route::post('/setting', [SettingController::class, 'update'])->name('setting.update');
});
