<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::group(['prefix' => 'api'], function() {
    Route::group(['prefix' => 'user'], function() {
        Route::get('', ['uses' => 'UserController@allUsers']);
        Route::get('{id}', ['uses' => 'UserController@getUser']);
        Route::post('', ['uses' => 'UserController@saveUser']);
        Route::put('{id}', ['uses' => 'UserController@updateUser']);
        Route::delete('{id}', ['uses' => 'UserController@deleteUser']);
    });

    Route::group(['prefix' => 'reserva'], function(){
        Route::get('', ['uses' => 'ReservaController@allReservas']);
        Route::get('{id}', ['uses' => 'ReservaController@getReserva']);
        Route::post('', ['uses' => 'ReservaController@saveReserva']);
        Route::put('{id}', ['uses' => 'ReservaController@updateReserva']);
        Route::delete('{id}', ['uses' => 'ReservaController@deleteReserva']);
    });

    Route::group(['prefix' => 'cliente'], function(){
        Route::get('', ['uses' => 'ClienteController@allClientes']);
        Route::get('{id}', ['uses' => 'ClienteController@getCliente']);
        Route::post('', ['uses' => 'ClienteController@saveCliente']);
        Route::put('{id}', ['uses' => 'ClienteController@updateCliente']);
        Route::delete('{id}', ['uses' => 'ClienteController@deleteCliente']);
    });

    Route::group(['prefix' => 'hotel'], function(){
        Route::get('', ['uses' => 'hotelService@getQuartos']);
        Route::get('{id}', ['uses' => 'hotelService@getQuarto']);
        Route::post('', ['uses' => 'hotelService@postHotel']);
    });
});



/*
Route::get('docs', function(){
    return view::make('api.docs.index');
});

App::missing(function(){
    return Redirect::to('docs');
});
*/
Route::get('', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
