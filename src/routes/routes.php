<?php

Route::group(['prefix' => 'dashboard-tanara-statistic'], function() {
    Route::get('demo', 'Bantenprov\Psb\Http\Controllers\PsbController@demo');
});
