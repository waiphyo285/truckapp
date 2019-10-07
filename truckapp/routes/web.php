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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* HomeController */

Route::get('/home', 'HomeController@index');

Route::get('/partnership','HomeController@partnership');

Route::get('/location','HomeController@location');

Route::get('/staff','HomeController@staff');

/* PartnerController */

Route::get('/detail/{tid}','PartnerController@detail');

Route::get('/delete/{tid}','PartnerController@delete');

Route::get('/edit/{tid}','PartnerController@edit');

Route::post('/edit/{tid}','PartnerController@update');

Route::get('/present','PartnerController@present');

Route::get('/left','PartnerController@left');

Route::get('/resign/{tid}','PartnerController@resign');

/* AddTruckController */

Route::post('/home','AddTruckController@addinfo');

/* AchieveController */

Route::get('/achieve','AchieveController@achieve');

Route::post('/achieve','AchieveController@done');

Route::get('/account','AchieveController@account');

Route::get('/detailacc/{truck}','AchieveController@detailacc');

Route::get('/net','AchieveController@net');

/* BookingController */

Route::get('/booking','BookingController@booking');

Route::post('/booking','BookingController@newbooking');

Route::get('/addloc/{id}','BookingController@addloc');

Route::post('/newstaff','BookingController@newstaff');

/* LocationController */

Route::get('/no/{decision}','LocationController@no');

Route::get('/yes/{decision}','LocationController@yes');

Route::post('/yes/{id}','LocationController@event');

Route::post('/location','LocationController@addevent');

Route::get('/finish','LocationController@finish');

Route::get('/cancel/{id}','LocationController@cancel');

Route::get('/viewcase','LocationController@viewcase');

// Route::get('/yourloc','LocationController@yourloc');

/* StaffController */

Route::get('/newstaff','StaffController@newstaff');

Route::get('/staffedit/{id}','StaffController@staffedit');

Route::post('/staffedit/{id}','StaffController@staffupd');

Route::get('/staffdel/{id}','StaffController@staffdel');

Route::get('/pay/{id}','StaffController@pay');

