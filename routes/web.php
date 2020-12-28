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
    Larademo::sayHello();
    print_r(FriendList::FriendInformation()) ;
    return view('welcome');
});
Route::get('/friendList',function(){
    $info = app(FriendList::FriendInformation());
    return $info;
});

Route::get('/friend-controller','FriendController@index');