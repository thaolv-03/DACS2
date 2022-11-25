<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\FaqsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::prefix('/shop')->group(function() {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/p1', [ProductController::class, 'index'])->name('p1');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews.index');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blog.index');
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs.index');

Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/show/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news', [NewsController::class, 'newsClient'])->name('news.newsClient');

Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/admin/news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('/admin/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('/admin/news/update/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/admin/news/destroy/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/getdataNews', [NewsController::class, 'getdata'])->name('news.getdata');
Route::get('/getNewsName', [NewsController::class, 'getdataName'])->name('news.getdata.name');
