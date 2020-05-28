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
Route::get('/home', function () {
    switch(\Illuminate\Support\Facades\Auth::user()->role->name){
        case 'admin':
            return redirect(route('home.admin'));
            break;
        case 'super':
            return redirect(route('home.super'));
            break;
        case 'sct':
            return redirect(route('home.sct'));
            break;
        case 'adming':
            return redirect(route('home.adming'));
            break;
        default:
            return '/login';
            break;
    }
});

Route::get('/home/admin', 'HomeController@indexAdmin')->name('home.admin');
Route::get('/home/super', 'HomeController@indexSuper')->name('home.super');
Route::get('/home/sct', 'HomeController@indexSct')->name('home.sct');
Route::get('/home/adming', 'HomeController@indexAdming')->name('home.adming');



