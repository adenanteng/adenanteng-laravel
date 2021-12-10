<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CvController;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {

    if (env('APP_ENV') === 'production') {
        $dmn = 'cv.adenanteng.com';
    }else{
        $dmn = 'cv.adenanteng.test';
    }

    Route::domain($dmn)->group(function () {

        Route::get('/', [CvController::class, 'index'])->name('cv');

        Route::get('{anyExceptRoot}', function() {
            return redirect('/');
        })->where('anyExceptRoot', '[^/]*');

    });


    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/starter', [HomeController::class, 'starter'])->name('starter');

    require base_path('vendor/laravel/fortify/routes/routes.php');
    //require base_path('vendor/laravel/jetstream/routes/livewire.php');

});

Route::get('/pp', function() {
    Artisan::call('route:trans:cache');
    Artisan::call('optimize');
    Artisan::call('route:clear');
//    Artisan::call('config:clear');
//    Artisan::call('cache:clear');
//    Artisan::call('view:clear');
    dd("cache clear All");
});

//URL::forceScheme('https');
if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}
