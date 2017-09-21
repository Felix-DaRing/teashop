<?php

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

Route::resource('categories','CatController');
Route::resource('menus','MenuController');
Route::resource('suppliers','SupController');
Route::resource('rawitems','RawController');
Route::resource('employees', 'EmployeeController');
Route::resource('loans', 'LoanController');
// Route::resource('purchases',s'PurchaseController');

Route::get('/categories/{id}/date', 'CatController@date');
Route::post('/categories/find', 'CatController@find');

Route::get('/purchases/date', 'PurchaseController@date');
Route::post('/purchases/find', 'PurchaseController@find');
Route::post('/purchases/debt', 'PurchaseController@debt');
Route::put('/purchases/debt/{id}/debtclear', 'PurchaseController@debtClear');
Route::get('/purchases/create', 'PurchaseController@create');
Route::get('/purchases/edit', 'PurchaseController@edit');
Route::get('/purchases/{id}/update', 'PurchaseController@update');
Route::put('/purchases/{id}/updateApply', 'PurchaseController@updateApply');
// Route::get('/purchases/{id}/show', 'PurchaseController@show');
Route::get('/purchases/{category_id}/purchases', 'PurchaseController@date');
// Route::put('/purchases/{id}/update', 'PurchaseController@update');
Route::delete('/purchases/{id}/destroy', 'PurchaseController@destroy');
Route::post('/purchases', 'PurchaseController@store');

Route::get('/sales/pos', 'SalesController@pos');
