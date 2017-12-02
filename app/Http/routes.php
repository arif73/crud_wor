<?php


Route::get('/','crud@index');

Route::get('/view','crud@view');

Route::post('/save-student','crud@savestudent');

Route::get('/delete/{id}','crud@delete');

Route::get('/edit/{id}','crud@edit');

Route::post('/update-student','crud@updatestudent');