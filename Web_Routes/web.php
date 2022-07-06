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

// Route::get('/', 'HomeController@index');
// Route::get('home', function () {

//     $petani = DB::table('electronics')->get();
//     $boy = DB::table('mens')->get();
//     $hat = DB::table('womens')->get();
//     $shoes = DB::table('sneakers')->get();
//     return view('front.home', ['petani' => $petani ,'hat' => $hat, 'boy' => $boy , 'shoes' => $shoes]);
// });

// Route::get('login', function  () {
//     return view('front.login');
// });

// // Login Form Routes

// Route::get('/main', 'MainController@index');
// Route::post('/main/checklogin', 'MainController@checklogin');
// Route::get('/main/successlogin', 'MainController@successlogin');
// Route::get('/main/logout', 'MainController@logout');

//Login form Routes End

Route::get('/' , function () {

    view('welcome');
});

Route::get('/home', 'MainController@home');

Route::get('/home/dashboard/chartjs','MainController@chart');
Route::get('/home/testimonials','MainController@testimon');
Route::get('/home/terms','MainController@terms');
Route::get('/home/contact','MainController@contact');
Route::get('/home/aboutus','MainController@aboutus');
Route::get('/home/dashboard/inline','MainController@inline');

Route::get('/home/dashboard/datatable','MainController@datatable');
Route::get('/home/dashboard/calendar','MainController@calendar');

Route::post('/home/dashboard/changepassword', 'ChangePasswordController@store')->name('change.password');
Route::get('/home/payment1/{page_path}', 'BuyController@showmens');
Route::get('/home/payment2/{page_path}', 'BuyController@showelectronics');
Route::get('/home/payment3/{page_path}', 'BuyController@showsneakers');
Route::get('/home/payment4/{page_path}', 'BuyController@showwomens');

Route::post('/home/paymentform', 'PaymentController@insert');

// Route::get('insert','StudInsertController@insertform');
// Route::post('create','StudInsertController@insert');


// Route::get('/main/paymentform', 'MainController@paymentgate1');


Route::group(['middleware'=>'disable_back_btn'],function(){
        Route::get('/home/login/dashboard', 'MainController@dash');
        Route::post('/home/checklogin', 'MainController@checklogin');
        Route::get('home/dashboard/logout', 'MainController@logout');
        Route::get('home/login', 'MainController@login');
        Route::get('/home/dashboard/changepassword', 'ChangePasswordController@index');
      
       
});




