<?php

Route::get('/', function(){
   return "hola mundo";
});

Route::get('/una/dos/tres', function() {
   return "aprendiendo ruta";
});

Route::get("hola/{nombre}", function($nombre){
    return $nombre;
})->where('nombre', '[a-zA-Z]+'); // From a to z and form A to Z
Route::get("hola/{nombre}", function($nombre){
    return $nombre;
})->where('nombre', '\d+'); // just digits
Route::get("hola/{nombre}", function($nombre){
    return $nombre;
})->where('nombre', '\w+'); // letters and digits

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');