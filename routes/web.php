<?php

use Illuminate\Support\Facades\Route;



// Route::get('/home', function () {
//    $data = [];
//    $data['version'] = '0.1.1';
//    return view('welcome',$data);
//});

Route::get('/', 'ContentsController@home');
Route::get('/clients', 'ClientController@index');
Route::get('/clients/new', 'ClientController@newClient');
Route::post('/clients/new', 'ClientController@create');




// Route::get('/', function () {
//   $response_arr = [];
//   $response_arr['author'] = 'SZ';
//   $response_arr['version'] = '0.1.1';
//   return 'hi2';
// /*return $response_arr;*/
// });


?>
