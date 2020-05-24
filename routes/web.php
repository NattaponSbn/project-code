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

// Route::get('homeBD', function () {
//     return view('homeBD');
// });
Route::get('homeMDD', function () {
    return view('homeMDD');
});

Route::get('Newarrival', 'ListdataController@Newarrivaldata');

Route::get('Popular', function () {
    return view('pagePopular');
});

Route::get('wed', function () {
    return view('wedType.wed');
});

Route::get('wedapp', function () {
    return view('wedType.wed&app');
});

Route::get('app', function () {
    return view('wedType.app');
});

Route::get('game', function () {
    return view('wedType.game');
});

// Route::view('addproject', 'addproject');
Route::view('addproject', 'addproject');
Route::get('submit', 'inputprojectController@save') ;


Route::get('admin', function () {
    return view('homeadmin');
});


Route::get('teststap', function () {
    return view('teststap');
});

// Route::get('logout', 'HomeController@index')->name('logout');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


// โชว์ข้อมูล
Route::get('dataview', 'ListdataController@Datalist') ;
// ลบข้อมูล
Route::get('delete/{id}', 'ListdataController@destroy');

Route::get('homeBD', 'ListdataController@Data') ;
