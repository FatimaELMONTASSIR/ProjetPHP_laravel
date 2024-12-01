<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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
Route::get('/test', function(){
     return view('test');
}
);

Route::get('/delete-client/{id}',[ClientController::class,'delete_client']);
Route::get('/update-client/{id}',[ClientController::class,'update_client']);
Route::get('/update/traitement',[ClientController::class,'update_client_traitement']);
Route::get('/Liste',[ClientController::class,'Liste_client']);
Route::get('/ajouter',[ClientController::class,'ajouter_client']);
Route::get('/ajouter/traitement',[ClientController::class,'ajouter_client_traitement']);
