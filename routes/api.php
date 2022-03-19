<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get( "/uj-dolgozo", [ DolgozoController::class, "newDolgozo" ]);
Route::post( "/tarol-dolgozo", [ DolgozoController::class, "storeDolgozo" ]);
Route::post( "/submit-dolgozo", [ DolgozoController::class, "submitDolgozo" ]);
Route::get( "/lista-dolgozo", [ DolgozoController::class, "listDolgozo" ]);
Route::get( "/lista-dolgozoDetailed", [ DolgozoController::class, "listDolgozoDetailed" ]);
Route::post( "/update-dolgozo", [ DolgozoController::class, "submitUpdateDolgozo" ]);

Route::get( "/dolgozolista", [ JobController::class, "listUser" ]);
Route::get( "/update/{id}", [ DolgozoController::class, "showUpdateDolgozo" ]);
Route::get( "/delete/{id}", [ DolgozoController::class, "deleteDolgozo" ]);


Route::get( "/", function() {
    return view( "welcome" );
});

Route::get( "/test", function() {
    return view( "Worker" );
});

Route::get( "/aboutus/{name}", function( $name ) {
    return view( "about", [ "name" => $name ] );
});



