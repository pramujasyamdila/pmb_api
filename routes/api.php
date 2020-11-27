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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



//=======Ini Adalah Rest Full API Kecamatan======\\
Route::Get('/kecamatan','KecamatanController@get');
Route::post('/kecamatan','KecamatanController@post');
Route::Get('/kecamatan/{id}','KecamatanController@getById');
Route::Put('/kecamatan/{id}','KecamatanController@put');
Route::Delete('/kecamatan/{id}','KecamatanController@delete');

//=======Ini Adalah Rest Full API Calon Mahasiswa======\\
Route::Get('/clnmahasiswa','CalonMahasiswaController@get');
Route::post('/clnmahasiswa','CalonMahasiswaController@post');
Route::Get('/clnmahasiswa/{id}','CalonMahasiswaController@getById');
Route::Put('/clnmahasiswa/{id}','CalonMahasiswaController@put');
Route::Delete('/clnmahasiswa/{id}','CalonMahasiswaController@delete');

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

//=======Ini Adalah Rest Full API Kecamatan======\\

