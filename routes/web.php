<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
Auth::routes();

Route::get('/', function () {
    if(Auth::check()){
        if(Auth::user()->hasRole('ເຈົ້າຂອງອາພາດເມັ້ນ')){
            return view('admin.index');
        }
        if(Auth::user()->hasRole('ພະນັກງານ')){
            return view('admin.index');
        }
        if(Auth::user()->hasRole('ຜູ້ເຊົ່າ')){
            return view('admin.index');
        }
        if(Auth::user()->hasRole('ຜູ້ໃຊ້')){
            return view('admin.index');
        }

    }else{
        return view('welcome');
    }
    
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

// main admin
Route::get('/admin',                    'Admin\IndexController@index')->name('admin.index');

// admin user 
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:seen-item')->group(function(){
    Route::resource('/user',          'User\IndexController',['except' =>['show','create','store']]);
});
Route::get('/admin/user/search',                          'Admin\User\IndexController@index')->name('search.user');
Route::get('/admin/user/edit/search',                      'Admin\User\IndexController@edit')->name('search.user.edit');


// admin type room
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/type',          'Type_room\IndexController',['except' =>['show']]);
});

// admin  room
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/room',          'Room\IndexController');
});

// admin  room image
Route::post('admin/image/{room}',      'Admin\Room\IndexController@upload')->name('admin.room.upload');

// admin  rent_room
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/rentRoom',          'rentRoom\IndexController');
});

// admin  rent_room_story
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/rentRoomStory',          'rentRoomStory\IndexController',['except' =>['index','create','show','destroy']]);
});


// admin  electric
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/electric',          'Electric\IndexController',['except'=>['index','create','show','destroy']]);
});

// admin  electric
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/Water',          'Water\IndexController',['except'=>['index','create','show','destroy']]);
});

// admin  equiment room
// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::resource('/equiment',          'Equiment\IndexController');
// });

