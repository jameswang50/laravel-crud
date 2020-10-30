<?php

Route::apiResource('/tasks', 'TasksController');
Route::post('/tasks/multiple-update', ['uses' => 'TasksController@multipleUpdate']);
Route::post('/tasks/multiple-delete', ['uses' => 'TasksController@multipleDelete']);
// Route::post('/crud/tasks/multiple-add', ['uses' => 'TasksController@multipleAdd']);

// File management
// Route::group(['prefix' => 'files'], function () {
//     // file upload
//     Route::post('/file-upload', 'FileController@fileUpload');
// });
