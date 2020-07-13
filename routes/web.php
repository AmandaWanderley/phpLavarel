<?php

use Illuminate\Support\Facades\Route;



// Route::get('/home', function () {
//    $data = [];
//    $data['version'] = '0.1.1';
//    return view('welcome',$data);
//});


// cada "/" vai chamar cada funcao e cada funcao vai mostrar uma pagina
//try localhost:8000/clients     etc...
Route::get('/', 'ContentsController@home')->name('home');
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
Route::post('/clients/new', 'ClientController@create')->name('create_client');
Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');
Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');


Route::get('/about', function () {
    return 'About Page';
});

Route::get('/contact', function () {
    return 'Contact Us Page';
});

Route::get('/di', 'ClientController@di');



// Route::get('/', function () {
//   $response_arr = [];
//   $response_arr['author'] = 'SZ';
//   $response_arr['version'] = '0.1.1';
//   return 'hi2';
// /*return $response_arr;*/
// });


?>
