<?php

use App\Http\Controllers\{
    BannerController,
    ContactUsPageController,
    DashboardController,
    LandingPageController,
    LandingView,
    PrivacyPolicy,
    PrivacyPolicyPageController,
    SettingController,
    TermsOfUsePageController,
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

Route::get('/', [LandingView::class, 'index'])->name('landing');
Route::get('/privacy-policy', [PrivacyPolicyPageCOntroller::class, 'index'])->name('privacy-policy');

Route::get('/terms-of-use', [TermsOfUsePageController::class, 'index'])->name('terms-of-use');

Route::get('/contact-us', [ContactUsPageController::class, 'index'])->name('contact-us');
Route::post('/contact-us/store', [ContactUsPageController::class, 'store']);
Route::get('/log', function () {
    return redirect()->route('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contact', [ContactUsPageController::class, 'show'])->name('contact');
    Route::get('/contact/destroy/{id}', [ContactUsPageController::class, 'destroy']);
    Route::get('/contact/detail/{id}', [ContactUsPageController::class, 'detail']);

    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('/banner/update', [BannerController::class, 'update']);

    Route::get('/privacy', [PrivacyPolicy::class, 'index'])->name('privacy');
    Route::post('/privacy/update', [PrivacyPolicy::class, 'update']);

    Route::get('/term', [PrivacyPolicy::class, 'term'])->name('term');
    Route::post('/term/updateterm', [PrivacyPolicy::class, 'updateterm']);


    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/setting/first', [SettingController::class, 'show'])->name('setting.show');
    Route::post('/setting', [SettingController::class, 'update'])->name('setting.update');

    // MAIN WEB
    Route::get('/landing_page', [LandingPageController::class, 'index'])->name('landingpage');
    Route::post('/landing_page/update', [LandingPageController::class, 'update']);
});
