<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    Route::get('/plb_registration', 'IMT\plb_registration\Http\Controllers\Shop\plb_registrationController@index')->defaults('_config', [
        'view' => 'plb_registration::shop.index',
    ])->name('plb_registration.shop.index');

});