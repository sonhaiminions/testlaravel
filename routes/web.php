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
Route::get('mu/{tyso?}',function($tyso){
    echo "ty so la: ".$tyso;
})->where(['tyso'=>'[0-9a-z]{3}+']);

 route::get('xsvietlot/{maso?}',function($maso){
     echo "ma du thuong vl : ".$maso;
 })->where(['maso'=>'[0-9a-z]{2,13}']);
 Route::get('sieunhan1',['as'=>'xanh',function(){
     echo "sieu nhan xanh";
 }]);
 route::get('goisieunhan',function(){
     return redirect()->route('mu');
 });
 Route::group(['prefix'=>'champion'],function(){
     Route::get('ef',function (){
         echo "hight ef";
     });
     Route::get('dk',function (){
         echo "dark knight";
     });
     Route::get('mg',function (){
         echo "magic glator";
     });
 });
 // goi controller
 route::get('goicontroller','MyController@XinChao');
 route::get('ThamSo/{ten?}','MyController@KhoaHoc');
 route::get('ur-ll','MyController@layURL');
 route::get('loginform','MyController@getForm');
 route::post('postForm',['as'=>'goitentoidi','uses'=>'MyController@HienThi']);
 route::get('setCooKie','MyController@setCooKie');
 route::get('getCooKie','MyController@getCooKie');