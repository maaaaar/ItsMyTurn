<?php


Route::get('/', function () {
    return view('index');
});

// Route::get("/asignatura", "AsignaturaController@index")->name('asignatura');
Route::get("/projecte", "ProjecteController@index")->name('projecte');
Route::get('/dades', 'DadesController@index')->name('dades');