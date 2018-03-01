<?php

Route::group(['prefix' => 'psb'], function() {
    Route::get('demo', 'Bantenprov\Psb\Http\Controllers\PsbController@demo');
});
