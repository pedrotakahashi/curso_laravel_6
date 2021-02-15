<?php


Route::get("/", 'Controller@index');

Route::resource('products', 'ProductController');
Route::resource('pessoas', 'PessoasController');

