<?php

use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\ConfigController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isLogin;

/*
|--------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware([isLogin::class])->group(function () {
    Route::get('giris', [AuthController::class, 'login'])->name('login');
    Route::post('giris', [AuthController::class, 'loginPost'])->name('login.post');
});

Route::prefix('admin')->name('admin.')->middleware([isAdmin::class])->group(function () {
    Route::get('panel', [Dashboard::class, 'index'])->name('dashboard');
    // Makale Route's
    Route::get('makaleler/silinenler', [ArticleController::class, 'trashed'])->name('trashed.article');
    Route::resource('makaleler', ArticleController::class);
    Route::get('/switch', [ArticleController::class, 'switch'])->name('switch');
    Route::get('/delete_article/{id}', [ArticleController::class, 'delete'])->name('delete.article');
    Route::get('/hard_delete_article/{id}', [ArticleController::class, 'hardDelete'])->name('hard.delete.article');
    Route::get('/recover_article/{id}', [ArticleController::class, 'recover'])->name('recover.article');
    // Category Route's
    Route::get('/kategoriler', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/kategoriler/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/kategoriler/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/kategoriler/delete', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/kategori/status', [CategoryController::class, 'switch'])->name('category.switch');
    Route::get('/kategori/getData', [CategoryController::class, 'getData'])->name('category.getdata');
    // Pages Route's
    Route::get('/sayfalar', [PageController::class, 'index'])->name('page.index');
    Route::get('/sayfalar/olustur', [PageController::class, 'create'])->name('page.create');
    Route::get('/sayfalar/guncelle/{id}', [PageController::class, 'update'])->name('page.edit');
    Route::post('/sayfalar/guncelle/{id}', [PageController::class, 'updatePost'])->name('page.edit.post');
    Route::post('/sayfalar/olustur', [PageController::class, 'post'])->name('page.create.post');
    Route::get('/sayfa/switch', [PageController::class, 'switch'])->name('page.switch');
    Route::get('/sayfa/sil/{id}', [PageController::class, 'delete'])->name('page.delete');
    Route::get('/sayfa/siralama', [PageController::class, 'orders'])->name('page.orders');
    // Configs Route's
    Route::get('/ayarlar', [ConfigController::class, 'index'])->name('config.index');
    Route::post('/ayarlar/update', [ConfigController::class, 'update'])->name('config.update');
    //
    Route::get('cikis', [AuthController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------
*/

Route::middleware(['check.site.active'])->group(function () {
    Route::get('/', [Homepage::class, 'index'])->name('homepage');
    Route::get('sayfa', [Homepage::class, 'index']);
    Route::get('/iletisim', [Homepage::class, 'contact'])->name('contact');
    Route::post('/iletisim', [Homepage::class, 'contactpost'])->name('contact.post');
    Route::get('/kategori/{category}', [Homepage::class, 'category'])->name('category');
    Route::get('/{category}/{slug}', [Homepage::class, 'single'])->name('single');
    Route::get('/{sayfa}', [Homepage::class, 'page'])->name('page');
});

