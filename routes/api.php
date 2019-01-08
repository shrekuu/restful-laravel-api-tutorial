<?php

use \Illuminate\Http\Request;

Auth::routes();

Route::group([
    'middleware' => 'auth:api',
], function() {
    Route::resource('articles', 'ArticleController');

    Route::get('user', function (Request $request) {
        return $request->user();
    });
});


