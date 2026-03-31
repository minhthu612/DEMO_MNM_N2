<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViduLayoutController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/formtinhtuoi', 'App\Http\Controllers\Age_Controller@formtinhtuoi');

Route::post('/tinhtuoi', 'App\Http\Controllers\Age_Controller@tinhtuoi');

Route::get("/qlsach/theloai","App\Http\Controllers\Book_Controller@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\Book_Controller@laythongtinsach");

Route::get("/baitap2","App\Http\Controllers\Book_Controller1@thongtinsachkinhdien");

Route::get("/themdulieu","App\Http\Controllers\Book_Controller2@themdulieu");
Route::get("/xoadulieu","App\Http\Controllers\Book_Controller2@xoadulieu");
Route::get("/suadulieu","App\Http\Controllers\Book_Controller2@suadulieu");
Route::get("/qlsach/theloai","App\Http\Controllers\Book_Controller2@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\Book_Controller2@laythongtinsach");

Route::get("/tranthithanhtien","App\Http\Controllers\Controller@tt");


Route::get("/DaoDangThuyVan","App\Http\Controllers\Controller@ZanThi");


Route::get("/VanCongThien","App\Http\Controllers\Controller@VanCongThien");
Route::get("/HuynhMinhThu","App\Http\Controllers\Controller@HMT");
Route::get("/TranLeDongAnh","App\Http\Controllers\Controller@tlda");

Route::get("/HoNgocTien","App\Http\Controllers\Controller@hnt");


/*7.4*/
Route::get("/topruntime","App\Http\Controllers\Movie_Controller@topRuntime");



/*7.1*/
Route::get("/genre","App\Http\Controllers\Movie_Controller@genre");

/*7.7*/
Route::get("/topmovie","App\Http\Controllers\Movie_Controller@topMovie");


Route::get("/Hienthifilm","App\Http\Controllers\Movie_Controller@FilmCanada");


Route::get("/binhchoncao","App\Http\Controllers\Movie_Controller@binhchoncao");

Route::get("/top-budget","App\Http\Controllers\Movie_Controller@topBudget");

Route::get("/C7_6","App\Http\Controllers\Movie_Controller@C7_6");


/*TH1-VD1*/
Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/trang2','App\Http\Controllers\ViduLayoutController@trang2');

/*TH1-VD2*/
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');

/*TH1-BT*/
Route::get('sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');

/*TH3*/
Route::get('/','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/accountpanel','App\Http\Controllers\AccountController@accountpanel')->middleware('auth')->name("account");
Route::post('/saveaccountinfo','App\Http\Controllers\AccountController@saveaccountinfo')->middleware('auth')->name('saveinfo');

/*TH4*/
Route::get('/order','App\Http\Controllers\BookController@order')->name('order');
Route::post('/cart/add','App\Http\Controllers\BookController@cartadd')->name('cartadd');
Route::post('/cart/delete','App\Http\Controllers\BookController@cartdelete')->name('cartdelete');
Route::post('/order/create','App\Http\Controllers\BookController@ordercreate')->middleware('auth')->name('ordercreate');
Route::post('/bookview','App\Http\Controllers\BookController@bookview')->name("bookview");