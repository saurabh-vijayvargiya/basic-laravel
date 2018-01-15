<?php

Route::get('calculator', function(){
  echo 'This is calculator package.';
});

Route::get('add/{a}/{b}', 'Saurabh\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Saurabh\Calculator\CalculatorController@subtract');