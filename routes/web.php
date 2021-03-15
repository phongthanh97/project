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

// Route::get('/', function () {
//     return view('backend.layouts.layout');
// });

// route Danh mục Loại Sản phẩm
// Hàm Route::resource() sẽ tạo toàn bộ các route CRUD theo tiêu chuẩn RestFul API
Route::resource('/admin/loai', 'Backend\LoaiController');

// Hoặc route riêng lẻ
Route::get('admin/loai', 'Backend\LoaiController@index')->name('admin.loai.index');
Route::get('admin/loai/create', 'Backend\LoaiController@create')->name('admin.loai.create');
Route::post('admin/loai/store', 'Backend\LoaiController@store')->name('admin.loai.store');
Route::get('/admin/loai/edit/{id}', 'Backend\LoaiController@edit')->name('admin.loai.edit');
Route::put('/admin/loai/edit/{id}', 'Backend\LoaiController@update')->name('admin.loai.update');
Route::delete('/admin/loai/delete/{id}', 'Backend\LoaiController@destroy')->name('admin.loai.destroy');
