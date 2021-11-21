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


Auth::routes();
Route::get('/', [App\Http\Controllers\WorkController::class, 'index']);
Route::get('/home', [App\Http\Controllers\WorkController::class, 'index'])->name('home');
Route::resource('category' , 'CategoryController')->middleware('isAdmin');
Route::resource('user','UserController');
Route::resource('saved-ads','SavedList');
Route::post('/user/ads','UserController@userAds')->name('userAds');
Route::post('/user/check-ad','UserController@isMyAd')->name('isMyAd');
//Route::resource('master','MasterController');

Route::name('master.')->group( function (){
    Route::get('/masters', 'MasterController@index')->name('index');
    Route::get('/master/{master_id}/show', 'MasterController@show')->name('show');
    Route::get('/master/create/{user}', 'MasterController@create')->name('create');
    Route::post('/master/store', 'MasterController@store')->name('store');
    Route::get('/master/{master}/edit', 'MasterController@edit')->name('edit');
    Route::put('/master/{id}/update', 'MasterController@update')->name('update');
    Route::delete('/master/{id}/delete', 'MasterController@destroy')->name('destroy');
    Route::get('/master/contracts/{master_id}', 'MasterController@masterContracts')->name('contracts');
    Route::get('/masters/list', 'MasterController@mastersList')->name('mastersList');
});
Route::name('work.')->group(function () {
    Route::get('/work','WorkController@index')->name('index');
    Route::get('/work/{work}/show','WorkController@show')->name('show');
    Route::get('/work/{work}/edit','WorkController@edit')->name('edit');
    Route::put('/work/{work_id}/update','WorkController@update')->name('update');
    Route::get('/work/create','WorkController@create')->name('create');
    Route::post('/work/store','WorkController@store')->name('store');
    Route::delete('/work/{work}/destroy','WorkController@destroy')->name('destroy');
    Route::get('/work/show/{user_id}/works','WorkController@userWorks')->name('userWorks');
    Route::post('/work/suggest/','ContractController@masterSuggestContractToClient')->name('masterSuggestContractToClient');
    Route::post('/work/check-suggest/','ContractController@isMasterSendSuggestToContract')->name('isMasterSendSuggestToContract');
});
Route::name('admin.')->middleware('isAdmin')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('adminIndex')->middleware('isAdmin');
    Route::get('/admin/users_page', 'UserController@getAllUsers')->name('usersPage');
    Route::get('/admin/reviews', 'AdminController@review')->name('review');
});
