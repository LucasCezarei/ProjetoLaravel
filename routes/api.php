<?php

Route::namespace('API')->name('api.')->group(function(){
    Route::get('products', 'ProductController@index')->name('products');
});



