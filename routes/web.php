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


Route::get('khoahoc', function() {
    return 'Xin chao!';
});

Route::get('xinchao', function () {
    return '<h1>Khoa hoc - laravel <h1>';
});

//truyen tham so tren Route.
Route::get('hoten/{ten}',function ($ten) {
    echo 'ten cua ban la: ' . $ten;
});


//rute gan dieu kien.
Route::get('test/{mayhoc}', function ($mayhoc) {
    echo 'may hoc ngay: ' . $mayhoc ;
})->where(['ngay' => '[0-9]+']);



//dinh danh va nhom Route.
//gan ten de goi trong he thong.
Route::get('route1', ['as' => 'newname', function() {
    echo 'xin chao new route';
}]);

//ddinh danh cho route.
Route::get('route2', function () {
    echo 'day la route 2';
})->name('newname2');

//goi ten route.
Route::get('goiten', function () {
   return redirect()->route('newname2');
});

//nhom Route.
Route::group(['prefix' =>'mygroup'],function () {
    Route::get('user1', function() {
        echo 'usser 1';
    });

    Route::get('user2', function() {
        echo 'usser 2';
    });

    Route::get('user3', function() {
        echo 'usser 3';
    });
});

//goi controller
Route::get('goicontroller', 'MyController@xinchao');

//goi controller va truyen tahm so..
Route::get('thamso/{ten}', 'MyController@khoahoc');

Route::get('myrequest', 'MyController@GetUrl');


//goi form voi phuong thuc post
//gui va nhan du lieu voi request

//tra ve view ra man hinh
Route::get('getForm', function() {
    return view('postForm');
});

//nhan du lieu tu form
Route::post('postForm', ['as'=>'postForm', 'uses'=> 'MyController@postForm']);

//cookie
Route::get('setCookie', 'MyController@setCookie');
Route::get('getCookie', 'MyController@getCookie');


//upload file.
Route::get('postFile', function () {
    return view('postFile');
});

Route::post('postFile', ['as'=>'postFile', 'uses' => 'MyController@postFile']);

//Views
Route::get('myview', 'MyController@myview');

//truyen tham so cho view
Route::get('time/{t}', 'MyController@time');

//share view
//khoa hoc la bien
//laravel la gia tri
View::share('khoahoc', 'laravel');


//layouts.

Route::get('bladetemplate/{str}', 'MyController@blade');

//connect datagase
Route::get('database', function() {
    // Test database connection
    try {
        DB::connection()->getPdo();
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration.");
    }

});


