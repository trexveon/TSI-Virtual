<?php


Route::get('/','noticiasController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
