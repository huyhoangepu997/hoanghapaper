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
    return view('pages.index');
});
Route::get('/home', function () {
    return view('pages.index');
});

Route::get('gioithieu', function () {
	return view('pages.gioithieu');
})->name('gioithieu');


Route::get('codong', function () {
	return view('pages.codong');
})->name('codong');

Route::get('tintuc', function () {
	return view('pages.tintuc');
})->name('tintuc');

Route::get('tuyendung', function () {
	return view('pages.tuyendung');
})->name('tuyendung');

Route::get('lienhe', function () {
	return view('pages.lienhe');
})->name('lienhe');

Route::get('category', function () {
	return view('pages.category');
})->name('category');

Route::get('product', function () {
	return view('pages.product');
})->name('product');

Route::get('tintucchitiet', function () {
	return view('pages.tintucchitiet');
})->name('tintucchitiet');

Route::get('tuyendungchitiet', function () {
	return view('pages.tuyendungchitiet');
})->name('tuyendungchitiet');

Route::get('codongchitiet', function () {
	return view('pages.codongchitiet');
})->name('codongchitiet');