<?php

Route::group(['middleware' => 'web', 'prefix' => 'question', 'namespace' => 'Modules\Question\Http\Controllers'], function()
{
    Route::get('/', 'QuestionController@index')->name('question.index');
});
