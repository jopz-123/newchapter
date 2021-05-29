<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddBookController;
use App\Http\Controllers\SearchbookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserReportController;

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
    return view('index');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/login', function () {
    return view('adminlogin');
});

Route::get('/Userhome', function () {
    return view('Userhome');
});


Route::get('/Userhome',[LoginController::class,'ViewName']);

Route::post('/Login',[userController::class , 'store' ] );

Route::post('/login',[LoginController::class , 'AdminLog' ] );
Route::post('/',[LoginController::class , 'CustomerLog' ] );



Route::get('/Category', function () {
    return view('/Category');
});
Route::post('/Category',[CategoryController::class,'InsertCategory']);
Route::get('/Category',[CategoryController::class,'ViewCategory']);
Route::get('/Category/{id}',[CategoryController::class,'DeleteCategory']);

Route::get('Addbook', function () {
    return view('Addbook');
});

Route::get('viewcbooking', function () {
    return view('viewcbooking');
});
Route::get('adminhome', function () {
    return view('adminhome');
});


Route::post('Addbook',[AddBookController::class , 'InsertBook' ] );
Route::get('Addbook',[AddBookController::class , 'GridView' ] );
Route::get('Addbook/{id}',[AddBookController::class , 'DeleteBook' ] );

Route::get('/SearchBook',[SearchbookController::class , 'CatView' ] );
Route::post('/SearchBook',[SearchbookController::class , 'ViewBooks' ] );
Route::get('/viewbookdetail',[SearchbookController::class,'ViewBookDetail']);

Route::post('/viewbookdetail',[BookingController::class , 'BookingIns' ] );
Route::get('/viewcbooking',[BookingController::class , 'Viewbooking' ] );
Route::get('/viewallbooking',[BookingController::class , 'Viewallbooking' ] );


Route::get('/UsersReport',[UserReportController::class,'ViewUsers']);

Route::get('/clogout',[LoginController::class,'logout']);

