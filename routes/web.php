<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductEnquiryController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductEnquiryController as AdminProductEnquiryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Admin\QuotationController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');

Route::get('/products/{slug}', [ProductController::class, 'show'])
    ->name('products.show');

    Route::get('/request-quote', [
    ProductEnquiryController::class,
    'create'
])->name('quote.create');


Route::post('/request-quote', [
    ProductEnquiryController::class,
    'store'
])->name('quote.store');


// About Us
Route::prefix('about')->name('about.')->group(function () {

    Route::get('/company-profile', [AboutController::class, 'companyProfile'])
        ->name('company');

    Route::get('/excellence', [AboutController::class, 'excellence'])
        ->name('excellence');

    Route::get('/quality-precision', [AboutController::class, 'quality'])
        ->name('quality');

});

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', [EnquiryController::class, 'store'])
    ->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get(
            '/login',
            [AuthController::class, 'showLogin']
        )->name('login');


        Route::post(
            '/login',
            [AuthController::class, 'login']
        )->name('login.submit');

    });



/*
|--------------------------------------------------------------------------
| Protected Admin Area
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin.auth')
    ->group(function () {



        Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');

        Route::get(
            '/enquiries',
            [AdminProductEnquiryController::class, 'index']
        )->name('enquiries.index');


        Route::get(
            '/enquiries/{enquiry}',
            [AdminProductEnquiryController::class, 'show']
        )->name('enquiries.show');


        Route::patch(
            '/enquiries/{enquiry}/status',
            [
                AdminProductEnquiryController::class,
                'updateStatus'
            ]
        )->name('enquiries.status');


        Route::delete(
            '/enquiries/{enquiry}',
            [
                AdminProductEnquiryController::class,
                'destroy'
            ]
        )->name('enquiries.destroy');



        Route::get(
    '/products',
    [AdminProductController::class, 'index']
)->name('products.index');


Route::get(
    '/products/create',
    [AdminProductController::class, 'create']
)->name('products.create');


Route::post(
    '/products',
    [AdminProductController::class, 'store']
)->name('products.store');


Route::get(
    '/products/{product}/edit',
    [AdminProductController::class, 'edit']
)->name('products.edit');


Route::put(
    '/products/{product}',
    [AdminProductController::class, 'update']
)->name('products.update');


Route::patch(
    '/products/{product}/toggle',
    [AdminProductController::class, 'toggle']
)->name('products.toggle');


Route::delete(
    '/products/{product}',
    [AdminProductController::class, 'destroy']
)->name('products.destroy');


Route::get(
    '/enquiries/{enquiry}/quotation/create',
    [QuotationController::class, 'create']
)->name('quotations.create');


Route::post(
    '/enquiries/{enquiry}/quotation',
    [QuotationController::class, 'store']
)->name('quotations.store');


Route::get(
    '/quotations/{quotation}',
    [QuotationController::class, 'show']
)->name('quotations.show');


Route::get(
    '/quotations',
    [QuotationController::class, 'index']
)->name('quotations.index');

Route::patch(
    '/quotations/{quotation}/status',
    [QuotationController::class, 'updateStatus']
)->name('quotations.status');


        Route::post(
            '/logout',
            [AuthController::class, 'logout']
        )->name('logout');

    });