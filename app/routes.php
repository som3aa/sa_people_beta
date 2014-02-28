<?php

// temp 
Route::get('/',function() {return Redirect::to('admin');});

/** ------------------------------------------
 *  Backend Routes
 *  ------------------------------------------
 */

Route::controller('admin/pages',	'Backend\PagesController');
Route::controller('admin',			'Backend\DashController');