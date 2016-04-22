<?php
Route::get('hello/{name?}', 'WelcomeController@index');

Route::get('caculate/{number1?}/{number2?}', 'OperatorController@caculate');

Route::get('greeting/{user?}', 'WelcomeController@index');

Route::resource('custumer', 'CustumerController');

Route::resource('books', 'BooksController');

Route::get('books/delete/{id?}','BooksController@destroy');

