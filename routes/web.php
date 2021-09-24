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

Route::get('userform',[App\Http\Controllers\Controller::class,'showuserfrom'])->name('showuserfrom');
Route::post('storeuserinfo',[\App\Http\Controllers\Controller::class,'storeuserinfodb'])->name('storeuserinfodb');
Route::get('showuserdata',[\App\Http\Controllers\Controller::class,'showuserdatadb'])->name('showuserdatadb');
Route::get('edituserdata/{id}',[\App\Http\Controllers\Controller::class,'updateable_user_data'])->name('updateable_user_data');
Route::post('userform',[\App\Http\Controllers\Controller::class,'upgradingdata'])->name('upgradingdata');




Route::get('confirm/{id}',[\App\Http\Controllers\Controller::class,'confirm_delete_user'])->name('confirm_delete_user');
Route::post('userdeleted',[\App\Http\Controllers\Controller::class,'user_deleted'])->name('user_deleted');
