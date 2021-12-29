<?php

use App\DemoData;
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
    // DemoData::truncate();
    $products = DemoData::all();
    foreach ($products as $product) {
        $product->delete();
    }
    return view('index');
});
Route::get('/savedata','IndexController@saveData')->name('saveData');
Route::get('/removedata','IndexController@removeData')->name('remodeData');
Route::post('/store','IndexController@store')->name('store');
