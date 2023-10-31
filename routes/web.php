<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarCategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\admin\CarController as AdminCarController;
use App\Http\Controllers\ReservationReportController;
use App\Http\Controllers\admin\ReservationController as AdminReservationController ;
use App\Models\Car;

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

require __DIR__.'/auth.php';
Auth::routes();

Route::get('/', function () {
    $cars = Car::limit(8)->get();
    return view('welcome' ,[
        'cars' => $cars
    ]);
})->name('index');

Route::get('/contact_us', function () {
    return view('contactus');
})->name('contactus');


  // cars group
  Route::prefix('/cars')->group(function () {
    Route::get('/list', function () {
        $cars = Car::all();
        return view('cars_list',[
            'cars' => $cars
        ]);
    })->name('cars');

  

    Route::get('/show/{id}' ,[
        CarController::class , 'show'
    ])->name('user.cars.show');


    Route::post('/vlaidate_rent/{id}' ,[
        CarController::class , 'validate_rent'
    ])->name('user.cars.validate_rent');
    

    Route::post('/confirm' ,[
        CarController::class , 'confirm'
    ])->name('user.cars.confirm');

    
 });



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/blogs' , [
     BlogController::class ,'index'
])->name('user.blog.index');

Route::get('/about_us' , function(){
    return  view('about_us');
})->name('about_us');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









Route::prefix('/admin')->group(function () {
    Route::get('/' , function(){
        return  view('admin');
    })->name('admin');
    // cars group
    Route::prefix('/cars')->group(function () {

        Route::get('/all' ,[
            CarController::class , 'index'
        ]);

       Route::get('create',[
        AdminCarController::class ,
        'create'
       ])->name('admin.cars.create');

       Route::get('/' ,[
        AdminCarController::class ,'index'
            ])->name('admin.cars.index');

       Route::post('/store' ,[
           AdminCarController::class ,'store'
        ])->name('admin.cars.store');


    
    });
    //  categoreis group
    Route::prefix('/categories')->group(function(){
            Route::get('/create' , [
                CarCategoryController::class ,
                'index'
                ])->name('admin.cars.categorie.index');

                Route::post('/store' , [
                    CarCategoryController::class ,
                    'Store'
                    ])->name('admin.cars.categorie.store');
    });



    Route::prefix('/reservation')->group(function(){
        Route::get('/create' , [
            AdminReservationController::class ,
            'create'
            ])->name('admin.reservation.create');

        Route::get('/' , [
            AdminReservationController::class ,
            'index'
            ])->name('admin.reservation.index');

        Route::post('/store' , [
            AdminReservationController::class ,
            'Store'
            ])->name('admin.reservation.store');

        Route::get('/show/{reservation_uuid}' , [
            AdminReservationController::class ,
            'show'
            ])->name('admin.reservation.show');

        Route::get('/confirm/{reservation_uuid}' , [
            AdminReservationController::class ,
            'confirm'
            ])->name('admin.reservation.confirm');
        
            Route::post('/',[
                AdminReservationController::class ,
                'store'
            ])->name('admin.reservation.store');

            Route::get('/contract' , function(){
                return view('admin.reservations.conract');
            })->name('contract');
});

});