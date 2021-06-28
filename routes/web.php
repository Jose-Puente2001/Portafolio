<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@Home')->name('home');
Route::get('portafolio', 'PageController@Portafolio')->name('portafolio');
Route::get('contactos', 'PageController@Contactos')->name('contactos');
