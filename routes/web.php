<?php

Route::get('/', function () 
{
    return view('login');
});

Route::get('/sidebar', function () 
{
    return view('layout/sidebar');
});

Route::get('/koneksi', function () 
{
    return view('koneksi');
});

Route::get('/home', function () 
{
    return view('home');
});

Route::get('/dosen', function () 
{
    return view('dosen');
});

/*Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
*/

Route::get('/report', function () 
{
    return view('report');
});

Route::get('/main2', function () 
{
    return view('layout/main2');
});

Route::get('/mahasiswa','MhsController@mahasiswa');

Route::get('/mahasiswa/search','MhsController@search');

Route::get('/mahasiswa/formulirMhs','MhsController@formulirMhs');

Route::post('/mahasiswa/simpanMhs','MhsController@simpanMhs');

Route::get('/mahasiswa/editMhs/{id}','MhsController@editMhs');

Route::put('/mahasiswa/updateMhs/{id}','MhsController@updateMhs');

Route::get('/mahasiswa/deleteMhs/{id}','MhsController@deleteMhs');

Route::get('/user','AuthController@user');

Route::get('/user/formulirUser','AuthController@formulirUser');

Route::post('/user/simpanUser','AuthController@simpanUser');

Route::get('/user/editUser/{id}','AuthController@editUser');

Route::put('/user/updateUser/{id}','AuthController@updateUser');

Route::get('/user/deleteUser/{id}','AuthController@deleteUser');

Route::get('/login','AuthController@login');

Route::post('/user/cekLogin','AuthController@cekLogin');

Route::get('/logout','AuthController@logout');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');