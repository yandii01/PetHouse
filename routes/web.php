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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/profile/{user}/editprofile', 'UserController@edit');
Route::patch('/profile/{user}', 'UserController@update');

// Route::get('/user', function () {
//     return view('user');
// })->middleware('auth');


Route::get('/about', 'PagesController@about');
Route::get('/pethouse', 'PagesController@pethouse');
Route::get('/adpethouse', 'PagesController@adpethouse');

Route::get('/manageuser', 'UserController@index');
Route::delete('/manageuser/{user}','UserController@destroy');

Route::get('/product', 'ProdukController@upload');
Route::post('/product/proses', 'ProdukController@proses_upload');
Route::patch('/product/{produk}', 'ProdukController@update');
Route::get('/product/{produk}/editproduct', 'ProdukController@edit');
Route::delete('/product/{produk}','ProdukController@destroy');
Route::get('/products', 'ProdukController@tampil');
Route::get('/products/{produk}', 'ProdukController@show');

Route::get('/products/{produk}/beli', 'ProdukController@test');
Route::post('/beli/proses', 'TransaksiController@store');
Route::get('/transaksi', 'TransaksiController@index');
Route::patch('/transaksi/{transaksi}', 'TransaksiController@update');

Route::get('/uploadberita', 'BeritaController@upload');
Route::post('/uploadberita/proses', 'BeritaController@proses_upload');
Route::get('/uploadberita/{berita}/editberita', 'BeritaController@edit');
Route::patch('/uploadberita/{berita}', 'BeritaController@update');

Route::get('/beritas', 'BeritaController@tampil');
Route::get('/beritas/{berita}', 'BeritaController@show');
Route::get('/beritas/{berita}/detail', 'BeritaController@beritaview');
Route::delete('/uploadberita/{berita}','BeritaController@destroy');


Route::get('/managehotel', 'HotelController@create');
Route::post('/managehotel/proses', 'HotelController@store');
Route::get('/managehotel/{hotel}/edithotel', 'HotelController@edit');
Route::patch('/managehotel/{hotel}', 'HotelController@update');
Route::delete('/managehotel/{hotel}', 'HotelController@destroy');
Route::get('/hotels', 'HotelController@tampil');
Route::get('/hotels/{hotel}', 'HotelController@show');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
