<?php
    /*   General links    */
    Route::get('/','GeneralController@home')->name('home');
    Route::view('/acerca-de','General.about')->name('about');
    Route::view('/contactanos','General.contact')->name('contact');
    Route::get('/setLocale/{locale}','GeneralController@setlocale');
    Route::get('/articulos','ArticleController@index');
    Route::get('/articulo/{article}','ArticleController@show')->where('article', '\d*');
    Route::get('/articulo/{article}/file','ArticleController@download')->where('article', '\d*');

	Route::post('/login','Auth\LoginController@login')->name('login');
	Route::get('/logout','Auth\LoginController@logout')->name('logout');
	Route::post('/register','Auth\RegisterController@register')->name('register');


    /* admin route */
    Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
        Route::get('/','AdminController@index')->name('admin');
        Route::get('/users','UserController@index')->name('users');
        Route::get('/sliders','SliderController@index')->name('sliders');

        Route::view('/article','articles.create');
        Route::view('/slider','Admin.sliders.create');

        Route::post('/article','ArticleController@store')->name('article-store');
        Route::post('/sliders','SliderController@store')->name('slider-store');

        Route::delete('/users/{user}','UserController@destroy');
        Route::delete('/sliders/{slider}','SliderController@destroy');
        Route::delete('/article/{article}','ArticleController@destroy');
    });