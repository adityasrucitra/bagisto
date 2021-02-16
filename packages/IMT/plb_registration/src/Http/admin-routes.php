<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/plb_registration', 'IMT\plb_registration\Http\Controllers\Admin\plb_registrationController@index')->defaults('_config', [
        'view' => 'plb_registration::admin.index',
    ])->name('plb_registration.admin.index');

});