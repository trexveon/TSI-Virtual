<?php


Route::get('/','noticiasController@index');

Route::get('/noticias','noticiasController@all');
Route::get('/noticias/visualizar/{id}','noticiasController@show');
Route::get('/noticias/pesquisar','noticiasController@search');

Route::get('/tcc','tccController@index');
Route::get('/tcc/pesquisar','tccController@search');

Route::get('/egressos','egressosController@index');
Route::get('/egressos/pesquisar','egressosController@search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');









Route::get('/texte', function(){
    return view('email.texte');
}
);
