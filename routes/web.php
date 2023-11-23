<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[PageController::class,'homePage']);
Route::get('/shop',[PageController::class,'shopPage']);
Route::get('/shoppingCart',[PageController::class,'shopcartPage']);
Route::get('/addToCart/{id}',[PageController::class,'shopDetailsPage']);
Route::get('/login',[PageController::class,'userLogin']);
Route::get('/logout',[PageController::class,'logout']);
Route::get('/register',[PageController::class,'signup']);
Route::post('/registerUser',[PageController::class,'registerUser']);
Route::post('/loginUser',[PageController::class,'loginUser']);
Route::post('/addToCarts',[PageController::class,'addToCartFun']);






