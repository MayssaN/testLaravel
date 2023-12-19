<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

    // exemple simple 
Route::get('/test/affichier', 'testController@afficher');
Route::get ('/index','testController@index');





//tous les actions pour catégories 


Route::get ('/category/ShowForm','CategoryController@showFormCategory');
Route::post ('/category/add','CategoryController@AddCategory');
Route::get ('/category/list','CategoryController@listCategory');
