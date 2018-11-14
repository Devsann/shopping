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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','PageController@index');
//09691334934

Route::get('/register','Auth\RegisterController@show');
Route::post('/register','Auth\RegisterController@register');

Route::get('/logout','Auth\LoginController@logout');

Route::get('/login','Auth\LoginController@show');
Route::post('/login','Auth\LoginController@login');

Route::get('/itview','Admin\SaleAdController@info_view');//info_view.blade
Route::get('/itview/it/{id}/buy','Admin\SaleAdController@itbuy');//itbuyform.blade
Route::post('/itview/it/{id}/buy','Admin\SaleAdController@itbuylist');//store Database

Route::get('/mobview','Admin\MobileController@index');//mobview.blade

Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'manager'),function (){
    Route::get('/compani','CompanyController@index'); //comp_page.blade
    Route::get('/salead','SaleAdController@index'); //Sales Admin Table view /

    Route::get('/compani/itorder','SaleAdController@itorder');//Orderlist View >> orderlist.blade

    Route::get('/salead/it/{id}/edit','SaleAdController@edit'); //IT table show
    Route::post('/salead/it/{id}/edit','SaleAdController@update'); // for Update

//    Route::get('/salead','SaleAdController@views'); //Sales Admin Table view /
    Route::get('/itcreator','SaleAdController@create');//it_create.blade
    Route::post('/itcreator','SaleAdController@store');//Add Database

    Route::get('/compani/mobtable','MobileController@tableview');//mobile tableview
    Route::get('/compani/mobtable/mobform','MobileController@create');//Mobile create Form >mobform.blade
    Route::post('/compani/mobtable/mobform','MobileController@store');//Add Database

});
