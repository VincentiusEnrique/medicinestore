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
    return view('mystore');
});
Route::get('wfp/{kelas}', function ($kelas) {
    if($kelas == "C")
    {
        return "WFP Kelas " . $kelas;
    }else{
        return "Bukan Kelas Saya";
    }
});
Route::get('vincentius', function () {
    return 'Hello WFP C';
});

Route::view('/welcome', 'welcome' );

Route::get('greeting', function () {
    return view('Welcome',['name'=>'Vincentius']);
});


Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');
Route::resource('transaction','TransactionController');
Route::resource('suppliers','SuppliersController');//->middleware('auth');
Route::post('transactions/showDataAjax','TransactionController@showAjax')->name('transaction.showAjax');
Route::post('/supplier/getEditForm','suppliersController@getEditForm')
->name('supplier'."getEditForm");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

