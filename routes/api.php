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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("alumnos","controlador_nuevo@inicio_de_controlador");
Route::post("delete","controlador_nuevo@delete")->name("delete");
Route::post("insert","controlador_nuevo@insert")->name("insert");
Route::get("login", "controlador_nuevo@login");
Route::post("inicio_sesion",['uses'=>'controlador_nuevo@inicio_sesion','as'=> "form.store"]);
Route::post("lugar_de_actualizar","controlador_nuevo@lugar_de_actualizar")->name("lugar_de_actualizar");
Route::post("update","controlador_nuevo@update")->name("update");
Route::get("fin_sesion","controlador_nuevo@fin_sesion")->name('fin_sesion');;