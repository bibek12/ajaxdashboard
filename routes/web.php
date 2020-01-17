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

use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']],function(){
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/register-role','Admin\DashboardController@register');

    Route::get('/edit-role/{id}','Admin\DashboardController@registerEdit');

    Route::put('/update-role/{id}','Admin\DashboardController@updaterole');

    Route::delete('/delete-role/{id}','Admin\DashboardController@deleterole');


});
