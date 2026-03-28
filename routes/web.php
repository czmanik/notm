<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Redirect;

// Root redirect
Route::get('/', function () {
    return Redirect::to('/cs');
});

Route::prefix('{locale}')->where(['locale' => 'cs|en'])->group(function () {
    Route::get('/', [PublicController::class, 'index'])->name('home');
    Route::get('/o-nas', [PublicController::class, 'about'])->name('about');
    Route::get('/sluzby', [PublicController::class, 'services'])->name('services');
    Route::get('/produkty', [PublicController::class, 'products'])->name('products');
    Route::get('/produkty/fotacek', [PublicController::class, 'fotacek'])->name('products.fotacek');
    Route::get('/produkty/gastrotech', [PublicController::class, 'gastrotech'])->name('products.gastrotech');
    Route::get('/produkty/mapOnCulture', [PublicController::class, 'maponculture'])->name('products.maponculture');
    Route::get('/produkty/vyvoj-na-miru', [PublicController::class, 'custom'])->name('products.custom');
    Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}', [PublicController::class, 'blogPost'])->name('blog.post');
    Route::get('/reference', [PublicController::class, 'references'])->name('references');
    Route::get('/kontakt', [PublicController::class, 'contact'])->name('contact');
    Route::post('/kontakt', [PublicController::class, 'contactStore'])->name('contact.store');
});
