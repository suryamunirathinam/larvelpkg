<?php


use Illuminate\Http\Request;

Route::group(['namespace'=>'Suryamunirathinam\Communication\Http\Controllers'],function(){
    Route::get('/form','FormController@index')->name('form');

    Route::post('/form','FormController@store');
});


Route::get('/formsss','Suryamunirathinam\Communication\Http\Controllers\FormController@index');
