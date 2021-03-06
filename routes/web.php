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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

// Route::get('/', 'HomepageController@index');
Route::get('/', function () {
    return view('homepage.index');
    // return view('welcome');
});
Route::post('/kirim-pesan', 'DashboardController@kirimpesan');
// Route::get('/kirim-pesan', function () {
//     \Mail::raw('Halo pesan testing dari belanjasemua.com', function ($message) {
//         $message->to('handoko@infinitysolutions.co.id', 'Handoko');
//         $message->subject('Order masuk belanjasemua.com');
//     });
// });
Route::get('/hubungi-kami', function () {
    return view('homepage.contact');
});
Route::get('/pesan', function () {
    return view('receivedemails');
});
Route::get('/tentang-kami', function () {
    return view('homepage.aboutus');
});
Route::get('/faqs', function () {
    return view('homepage.faqs');
});
Route::get('/dash', function () {
    return view('dashboard');
});
Route::prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@loginshow')->name('login.show');
    Route::post('/', 'DashboardController@loginproses')->name('login.proses');
});
Route::get('logout', function () {
    session()->flush();
    return redirect('/admin/dashboard');
});

Route::post('/proses/belanja', 'HomepageController@addorder');
// Katalog katalog or PRODUK



Route::prefix('product/details')->group(function () {
    Route::get('/{product_name}', 'HomepageControler@productdetails');
});

Route::group(['prefix' => 'admin', 'middleware' => 'isLogin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/customerorder', 'DashboardController@showorder');
    Route::get('/user', 'DashboardController@showuser');
    Route::get('/gallery', 'DashboardController@showgallery');
    Route::get('/products', 'DashboardController@showproducts');
    Route::get('/emails', 'DashboardController@showemails');
    Route::get('/announcement', 'DashboardController@showannounce');
    Route::get('/partner', 'DashboardController@showpartner');
    Route::get('/video', 'DashboardController@showvideo');
});

Route::group(['prefix' => 'admin/user', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewuser', 'DashboardController@prosesaaddnew');
    Route::get('/trash/{id}', 'DashboardController@trashuser');
    Route::post('/update/{id}', 'DashboardController@updateuser');
});
Route::group(['prefix' => 'admin/products', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewproduct', 'DashboardController@prosesaddproduct');
    Route::post('/addnewkategori', 'DashboardController@prosesaddkategori');
    Route::post('/addnewproduk', 'DashboardController@prosesadditem');
    Route::get('/trash/{id}', 'DashboardController@trashproduct');
    Route::post('/update/{id}', 'DashboardController@updateproduct');
});
Route::group(['prefix' => 'admin/customerorder', 'middleware' => 'isLogin'], function () {
    Route::post('/addneworder', 'DashboardController@prosesaddorder');
    Route::get('/trash/{id}', 'DashboardController@trashorder');
    Route::post('/update/{id}', 'DashboardController@updateblog');
});
Route::group(['prefix' => 'admin/gallery', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewgallery', 'DashboardController@prosesaddgallery');
    Route::get('/trash/{id}', 'DashboardController@trashgallery');
});
Route::group(['prefix' => 'admin/video', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewvideo', 'DashboardController@prosesaddvideo');
    Route::get('/trash/{id}', 'DashboardController@trashvideo');
});
Route::group(['prefix' => 'admin/partner', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewpartner', 'DashboardController@prosesaddpartner');
    Route::get('/trash/{id}', 'DashboardController@trashpartner');
});
Route::group(['prefix' => 'admin/emails', 'middleware' => 'isLogin'], function () {
    Route::get('/read/{id}', 'DashboardController@changestatus');
});
Route::group(['prefix' => 'admin/announcement', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewannouncement', 'DashboardController@addnewannouncement');
    Route::post('/editannouncement/{id}', 'DashboardController@editannounce');
});
