<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeapartmentController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\AddressController;
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

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'getLogin');
    Route::get('/login', 'getLogin')->name('login');
    Route::post('/login', 'postLogin');
    Route::get('/reset', 'getResetPassword');
    Route::post('/reset', 'postResetPassword');
    Route::get('/logout', 'getLogout');
});

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'getHome');
    });

    Route::controller(SearchController::class)->group(function () {
        Route::post('/search', 'postSearch');
        Route::post('/clear-search', 'postClearSearch');
    });

    Route::prefix('/address')->group(function () {
        Route::controller(AddressController::class)->group(function () {
        Route::get('/render_districts/{id}', 'getDistrict');
        Route::get('/render_wards/{id}', 'getWard');
        });
    });

    Route::prefix('/profile')->name('nhansu')->group(function () {
        Route::controller(ProfileController::class)->group(function () {

            Route::get('/', 'getProfile');
            Route::post('/', 'postProfile');
            Route::post('/recovery', 'postRecoveryPassword');

            Route::get('/list', 'getList'); 

            Route::get('/create', 'getCreate');
            Route::post('/create', 'postCreate');

            Route::get('/show/{id}', 'getShow');

            Route::get('/edit/{id}', 'getEdit');
            Route::post('/edit', 'postEdit');

            Route::get('/delete/{id}', 'getDelete');
        });
    });
    Route::prefix('/customer')->name('khachhang')->group(function () {
        Route::controller(CustomerController::class)->group(function () {

            Route::get('/list', 'getList');

            Route::get('/create', 'getCreate');
            Route::post('/create', 'postCreate');

            Route::get('/show/{id}', 'getShow');

            Route::get('/edit/{id}', 'getEdit');
            Route::post('/edit', 'postEdit');

            Route::post('/change-status/{id}', 'postChangeStatus');
        });
    });
    Route::prefix('/building')->name('khoitao')->group(function () {
        Route::controller(BuildingController::class)->group(function () {
            
            Route::get('/list', 'getList');

            Route::get('/create', 'getCreate');
            Route::get('/get_discription/{id}', 'getDiscription');
            Route::post('/get_typeapartment', 'getTypeApartment');
            // Route::post('/create', 'postCreutilities_discriptionate');

            Route::get('/show/{id}', 'getShow');

            Route::get('/edit/{id}', 'getEdit');
            Route::post('/edit', 'postEdit');

            Route::post('/change-status/{id}', 'postChangeStatus');
           
            Route::get('/renderService', 'renderService');
            Route::get('/renderUtilities', 'renderUtilities');

            
        });
    });
    Route::prefix('/typeapartment')->name('khoitao')->group(function () {
        Route::controller(TypeapartmentController::class)->group(function () {

            Route::get('/list', 'getList');

            Route::post('/create', 'postCreate');

            Route::post('/edit', 'postEdit');

            // Route::get('/delete/{id}', 'getDelete');

            Route::post('/find', 'postFind');

        });
    });

    Route::prefix('/utilities')->name('khoitao')->group(function () {
        Route::controller(UtilitiesController::class)->group(function () {

            Route::get('/list', 'getList');

            Route::post('/create', 'postCreate');

            Route::post('/edit', 'postEdit');

            // Route::get('/delete/{id}', 'getDelete');

            Route::post('/find', 'postFind');

        });
    });
    Route::prefix('/unit')->name('khoitao')->group(function () {
        Route::controller(UnitController::class)->group(function () {

            Route::get('/list', 'getList');

            Route::post('/create', 'postCreate');

            Route::post('/edit', 'postEdit');

            // Route::get('/delete/{id}', 'getDelete');

            Route::post('/find', 'postFind');

        });
    });
    Route::prefix('/service')->name('khoitao')->group(function () {
        Route::controller(ServiceController::class)->group(function () {

            Route::get('/list', 'getList');

            Route::post('/create', 'postCreate');

            Route::post('/edit', 'postEdit');

            // Route::get('/delete/{id}', 'getDelete');

            Route::post('/find', 'postFind');

        });
    });
    Route::prefix('/apartment')->name('khoitao')->group(function () {
        Route::controller(ApartmentController::class)->group(function () {

            Route::get('/list', 'getList');

            Route::post('/create', 'postCreate');

            Route::post('/edit', 'postEdit');

            // Route::get('/delete/{id}', 'getDelete');

            Route::post('/find', 'postFind');

        });
    });
});