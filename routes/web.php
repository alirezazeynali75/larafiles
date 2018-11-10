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
Route::group(['prefix'=>'admin' ,'namespace'=>'Admin' ], function (){
    Route::get('/' , function (){

        return view("admin.user.user");
    });
    Route::get('/users' ,  'UsersController@index' )->name('admin.users.list');
    Route::get('/users/create' , 'UsersController@create')->name('admin.users.create');
    Route::post('/users/create' , 'UsersController@store')->name('admin.users.store');
    Route::get('/users/delete/{user_id}' , 'UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{user_id}' , 'UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{user_id}' , 'UsersController@update')->name('admin.users.update');
    Route::get('/files' , 'FilesController@index')->name('admin.files.list');
    Route::get('/files/create' , 'FilesController@create')->name('admin.files.create');
    Route::post('/files/create' , 'FilesController@store')->name('admin.files.store');
    Route::get('/files/delete/{file_id}' , 'FilesController@delete')->name('admin.files.delete');
    Route::get('/plans' , 'PlansController@index')->name('admin.plans.list');
    Route::get('/plans/create' , 'PlansController@create')->name('admin.plans.create');
    Route::post('/plans/create' , 'PlansController@store')->name('admin.plans.store');
    Route::get('/plans/delete/{plan_id}' , 'PlansController@delete')->name('admin.plans.delete');
    Route::get('/packages' , 'PackagesController@index')->name('admin.packages.list');
    Route::get('/packages/create' , 'PackagesController@create')->name('admin.packages.create');
    Route::post('/packages/create' , 'PackagesController@store')->name('admin.packages.store');
    Route::get('/packages/delete/{package_id}' , 'PackagesController@delete')->name('admin.packages.delete');
    Route::get('/packages/files/{package_id}' , 'PackagesController@syncFile')->name('admin.packages.syncFile');
    Route::post('/packages/files/{package_id}' , 'PackagesController@updateSyncFile')->name('admin.packages.UpdateSyncFile');
});

