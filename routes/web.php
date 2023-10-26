<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
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


Route::get('/',function (){
    return view ('welcome'); //global helper methods
}); // callback fn / anony


Route::get('/test',function(){
    return view('test');
});

Route::get('/test100',function(){
    return view('test2');
})->name('test2');

Route::controller(DepartmentController::class)->group(function () {
    Route::prefix('admin')->group(function(){
        Route::name('admin.departments.')->group(function(){
            Route::get("/departments",'index')->name('index');
            Route::get("/departments/create",'create')->name('create');
            Route::get('departments/{id?}','show')->name('show')->whereNumber('id');
            Route::get('departments/{id}/edit','edit')->name('edit')->whereNumber('id');
            Route::post('departments','store')->name('store');
            Route::put('departments','update')->name('update');
            Route::delete('departments/{id}','destroy')->name('destroy');
        });

        Route::get('/home',[HomeController::class,'index']);
        Route::name('admin.')->group(function(){
            Route::resources([
                'employees' => EmployeeController::class
            ]);
        });
    });
});


