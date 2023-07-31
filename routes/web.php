<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('inicio', InicioController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos/','index');
    Route::get('/cursos/create','create');
    Route::get('/cursos/{curso}','show');
});



/* 
    Route::get('cursos/{curso}/{categoria?}' , function ($curso,$categoria=null) {

    if($categoria == null){
        return "Bienvenidos al curso $curso";
    }else{
        return "Bienvenidos al curso $curso de la categoría $categoria";
    }
    
});
*/


