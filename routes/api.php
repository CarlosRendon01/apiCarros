<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){

Route::resource('carros','Api\V1\CarrosController');
Route::post('carros/{id}','Api\V1\CarrosController@update');
Route::delete('carros/{id}','Api\V1\CarrosController@destroy');

});


?>