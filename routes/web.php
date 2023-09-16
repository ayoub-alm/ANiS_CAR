<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarCategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\admin\CarController as AdminCarController;
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







Route::get('/admin' , function(){
    return  view('admin');
})->name('admin');

Route::prefix('/admin')->group(function () {
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

});