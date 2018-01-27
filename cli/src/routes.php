<?php

Route::get('cli', function(){
    echo 'Hello from the cli package!';
});
Route::get('add/{a}/{b}', 'Taytus\Cli\CliController@add');
Route::get('subtract/{a}/{b}', 'Taytus\Cli\CliController@subtract');