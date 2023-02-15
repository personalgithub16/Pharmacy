<?php

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/mother_dashboard','App\Http\Controllers\DashboardController@index')->name('mother_dashboard');
    
    Route::get('/Customer_Details/create', 'App\Http\Controllers\CustomerController@create')->name('Customer_Details.create');
    Route::put('/Customer_Details/create', 'App\Http\Controllers\CustomerController@store')->name('Customer_Details.store');
    Route::get('/Customer_Details/list', 'App\Http\Controllers\CustomerController@list')->name('Customer_Details.list');
    Route::get('/Customer_Details/edit/{id}', 'App\Http\Controllers\CustomerController@edit')->name('Customer_Details.edit');
    Route::post('/Customer_Details/update/{id}', 'App\Http\Controllers\CustomerController@update')->name('Customer_Details.update');
    Route::get('Customer_Details/{id}', 'App\Http\Controllers\CustomerController@destroy')->name('Customer_Details.destroy');
    Route::get('/Customer_Details/preview/{id}', 'App\Http\Controllers\CustomerController@preview')->name('Customer_Details.preview');

    
    Route::get('/Category_Details/create', 'App\Http\Controllers\CategoryController@create')->name('Category_Details.create');
    Route::put('/Category_Details/create', 'App\Http\Controllers\CategoryController@store')->name('Category_Details.store');
    Route::get('/Category_Details/list', 'App\Http\Controllers\CategoryController@list')->name('Category_Details.list');
    Route::get('/Category_Details/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('Category_Details.edit');
    Route::post('/Category_Details/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('Category_Details.update');
    Route::get('/Category_Details/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('Category_Details.destroy');


    Route::get('/Unit_Details/create', 'App\Http\Controllers\UnitController@create')->name('Unit_Details.create');
    Route::put('/Unit_Details/create', 'App\Http\Controllers\UnitController@store')->name('Unit_Details.store');
    Route::get('/Unit_Details/list', 'App\Http\Controllers\UnitController@list')->name('Unit_Details.list');
    Route::get('/Unit_Details/edit/{id}', 'App\Http\Controllers\UnitController@edit')->name('Unit_Details.edit');
    Route::post('/Unit_Details/update/{id}', 'App\Http\Controllers\UnitController@update')->name('Unit_Details.update');
    Route::get('/Unit_Details/{id}', 'App\Http\Controllers\UnitController@destroy')->name('Unit_Details.destroy');

    Route::get('/Medicine_Type/create', 'App\Http\Controllers\MedicineTypeController@create')->name('Medicine_Type_Details.create');
    Route::put('/Medicine_Type/create', 'App\Http\Controllers\MedicineTypeController@store')->name('Medicine_Type_Details.store');
    Route::get('/Medicine_Type/list', 'App\Http\Controllers\MedicineTypeController@list')->name('Medicine_Type_Details.list');
    Route::get('/Medicine_Type/edit/{id}', 'App\Http\Controllers\MedicineTypeController@edit')->name('Medicine_Type_Details.edit');
    Route::post('/Medicine_Type/update/{id}', 'App\Http\Controllers\MedicineTypeController@update')->name('Medicine_Type_Details.update');
    Route::get('/Medicine_Type/{id}', 'App\Http\Controllers\MedicineTypeController@destroy')->name('Medicine_Type_Details.destroy');


    Route::get('/Leaf_Type/create', 'App\Http\Controllers\LeafTypeController@create')->name('LeafType_Details.create');
    Route::put('/Leaf_Type/create', 'App\Http\Controllers\LeafTypeController@store')->name('LeafType_Details.store');
    Route::get('/Leaf_Type/list', 'App\Http\Controllers\LeafTypeController@list')->name('LeafType_Details.list');
    Route::get('/Leaf_Type/edit/{id}', 'App\Http\Controllers\LeafTypeController@edit')->name('LeafType_Details.edit');
    Route::post('/Leaf_Type/update/{id}', 'App\Http\Controllers\LeafTypeController@update')->name('LeafType_Details.update');
    Route::get('/Leaf_Type/{id}', 'App\Http\Controllers\LeafTypeController@destroy')->name('LeafType_Details.destroy');

    
    Route::get('/Manufacturer_Details/create', 'App\Http\Controllers\ManufacturerController@create')->name('Manufacturer_Details.create');
    Route::put('/Manufacturer_Details/create', 'App\Http\Controllers\ManufacturerController@store')->name('Manufacturer_Details.store');
    Route::get('/Manufacturer_Details/list', 'App\Http\Controllers\ManufacturerController@list')->name('Manufacturer_Details.list');
    Route::get('/Manufacturer_Details/edit/{id}', 'App\Http\Controllers\ManufacturerController@edit')->name('Manufacturer_Details.edit');
    Route::post('/Manufacturer_Details/update/{id}', 'App\Http\Controllers\ManufacturerController@update')->name('Manufacturer_Details.update');
    Route::get('Manufacturer_Details/{id}', 'App\Http\Controllers\ManufacturerController@destroy')->name('Manufacturer_Details.destroy');
    Route::get('/Manufacturer_Details/preview/{id}', 'App\Http\Controllers\ManufacturerController@preview')->name('Manufacturer_Details.preview');


    Route::get('/Medicine_Details/create', 'App\Http\Controllers\MedicineController@create')->name('Medicine_Details.create');
    Route::put('/Medicine_Details/create', 'App\Http\Controllers\MedicineController@store')->name('Medicine_Details.store');
    Route::get('/Medicine_Details/list', 'App\Http\Controllers\MedicineController@list')->name('Medicine_Details.list');
    Route::get('/Medicine_Details/edit/{id}', 'App\Http\Controllers\MedicineController@edit')->name('Medicine_Details.edit');
    Route::post('/Medicine_Details/update/{id}', 'App\Http\Controllers\MedicineController@update')->name('Medicine_Details.update');
    Route::get('Medicine_Details/{id}', 'App\Http\Controllers\MedicineController@destroy')->name('Medicine_Details.destroy');
    Route::get('/Medicine_Details/preview/{id}', 'App\Http\Controllers\MedicineController@preview')->name('Medicine_Details.preview');
    Route::get('/changeStatus/','App\Http\Controllers\MedicineController@Status')->name('changeStatus');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
