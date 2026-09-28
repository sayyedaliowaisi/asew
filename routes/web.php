<?php

use Illuminate\Support\Facades\Route;

use App\Models\HomepageSetting;
use App\Models\HomepageSlide;
use App\Models\HomepageStat;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductEnquiryController;
use App\Http\Controllers\PublicQuotationController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ProductEnquiryController as AdminProductEnquiryController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\SalesOrderController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\HomepageSettingController;
use App\Http\Controllers\Admin\HomepageSlideController;
use App\Http\Controllers\Admin\HomepageStatController;
use App\Http\Controllers\Admin\HomepageReasonController;
use App\Http\Controllers\Admin\HomepageManufacturingImageController;
use App\Http\Controllers\Admin\HomepageLabCardController;
use App\Http\Controllers\Admin\HomepageProductCategoryController;
use App\Http\Controllers\Admin\AiConversationController;

use App\Http\Controllers\AiAgentController;
use App\Http\Controllers\Admin\AiChatNotificationController;


/*
|--------------------------------------------------------------------------
| PUBLIC WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $homepageSettings = HomepageSetting::query()
        ->find(1);

    $homepageSlides = HomepageSlide::query()
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    $homepageStats = HomepageStat::query()
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();

    return view(
        'pages.home',
        compact(
            'homepageSettings',
            'homepageSlides',
            'homepageStats'
        )
    );

})->name('home');


/*
|--------------------------------------------------------------------------
| PRODUCTS
|--------------------------------------------------------------------------
*/

Route::get(
    '/products',
    [ProductController::class, 'index']
)->name('products');

Route::get(
    '/products/{slug}',
    [ProductController::class, 'show']
)->name('products.show');


/*
|--------------------------------------------------------------------------
| PRODUCT QUOTE REQUEST
|--------------------------------------------------------------------------
*/

Route::get(
    '/request-quote',
    [ProductEnquiryController::class, 'create']
)->name('quote.create');

Route::post(
    '/request-quote',
    [ProductEnquiryController::class, 'store']
)
    ->middleware('throttle:10,1')
    ->name('quote.store');


/*
|--------------------------------------------------------------------------
| ABOUT US
|--------------------------------------------------------------------------
*/

Route::prefix('about')
    ->name('about.')
    ->group(function () {

        Route::get(
            '/company-profile',
            [AboutController::class, 'companyProfile']
        )->name('company');

        Route::get(
            '/excellence',
            [AboutController::class, 'excellence']
        )->name('excellence');

        Route::get(
            '/quality-precision',
            [AboutController::class, 'quality']
        )->name('quality');
    });


/*
|--------------------------------------------------------------------------
| MANUFACTURING
|--------------------------------------------------------------------------
*/

Route::view(
    '/manufacturing',
    'pages.manufacturing'
)->name('manufacturing');


/*
|--------------------------------------------------------------------------
| COMPLETE LAB SOLUTIONS
|--------------------------------------------------------------------------
*/

Route::view(
    '/complete-lab-solutions',
    'pages.complete-lab-solutions'
)->name('lab-solutions');


/*
|--------------------------------------------------------------------------
| SERVICES
|--------------------------------------------------------------------------
*/

Route::prefix('services')
    ->name('services.')
    ->group(function () {

        Route::view(
            '/installation',
            'pages.services.installation'
        )->name('installation');

        Route::view(
            '/calibration',
            'pages.services.calibration'
        )->name('calibration');

        Route::view(
            '/technical-support',
            'pages.services.technical-support'
        )->name('technical-support');

        Route::view(
            '/after-sales',
            'pages.services.after-sales'
        )->name('after-sales');
    });


/*
|--------------------------------------------------------------------------
| DOWNLOADS
|--------------------------------------------------------------------------
*/

Route::view(
    '/downloads',
    'pages.downloads'
)->name('downloads');


Route::post('/ai/chat', [AiAgentController::class, 'chat'])
    ->middleware('throttle:20,1')
    ->name('ai.chat');

    Route::post('/ai/messages', [AiAgentController::class, 'messages'])
    ->middleware('throttle:120,1')
    ->name('ai.messages');


Route::post(
    '/ai/human-message',
    [AiAgentController::class, 'humanMessage']
)
    ->middleware('throttle:30,1')
    ->name('ai.human-message');

/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

Route::view(
    '/contact',
    'pages.contact'
)->name('contact');

Route::post(
    '/contact',
    [EnquiryController::class, 'store']
)
    ->middleware('throttle:10,1')
    ->name('contact.submit');


/*
|--------------------------------------------------------------------------
| PUBLIC QUOTATION
|--------------------------------------------------------------------------
*/

Route::get(
    '/quotation/{quotationNumber}/{token}',
    [PublicQuotationController::class, 'show']
)->name('quotation.public');

Route::post(
    '/quotation/{quotationNumber}/{token}/respond',
    [PublicQuotationController::class, 'respond']
)
    ->middleware('throttle:10,1')
    ->name('quotation.respond');


/*
|--------------------------------------------------------------------------
| ADMIN AUTHENTICATION
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
        )
            ->middleware('throttle:10,1')
            ->name('login.submit');
    });


/*
|--------------------------------------------------------------------------
| PROTECTED ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin.auth')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/dashboard',
            [DashboardController::class, 'index']
        )->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | ENQUIRIES
        |--------------------------------------------------------------------------
        */

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
            [AdminProductEnquiryController::class, 'updateStatus']
        )->name('enquiries.status');

        Route::delete(
            '/enquiries/{enquiry}',
            [AdminProductEnquiryController::class, 'destroy']
        )->name('enquiries.destroy');


        /*
        |--------------------------------------------------------------------------
        | PRODUCTS
        |--------------------------------------------------------------------------
        */

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


        /*
        |--------------------------------------------------------------------------
        | QUOTATIONS
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/enquiries/{enquiry}/quotation/create',
            [QuotationController::class, 'create']
        )->name('quotations.create');

        Route::post(
            '/enquiries/{enquiry}/quotation',
            [QuotationController::class, 'store']
        )->name('quotations.store');

        Route::get(
            '/quotations',
            [QuotationController::class, 'index']
        )->name('quotations.index');

        Route::get(
            '/quotations/{quotation}',
            [QuotationController::class, 'show']
        )->name('quotations.show');

        Route::patch(
            '/quotations/{quotation}/status',
            [QuotationController::class, 'updateStatus']
        )->name('quotations.status');

        Route::post(
            '/quotations/{quotation}/send',
            [QuotationController::class, 'send']
        )->name('quotations.send');


        /*
        |--------------------------------------------------------------------------
        | SALES ORDERS
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/sales-orders',
            [SalesOrderController::class, 'index']
        )->name('sales-orders.index');

        Route::post(
            '/quotations/{quotation}/convert-order',
            [SalesOrderController::class, 'convert']
        )->name('sales-orders.convert');

        Route::get(
            '/sales-orders/{salesOrder}/document',
            [SalesOrderController::class, 'document']
        )->name('sales-orders.document');

        Route::post(
            '/sales-orders/{salesOrder}/send',
            [SalesOrderController::class, 'send']
        )->name('sales-orders.send');

        Route::post(
            '/sales-orders/{salesOrder}/dispatch-email',
            [SalesOrderController::class, 'sendDispatchEmail']
        )->name('sales-orders.dispatch-email');

        Route::get(
            '/sales-orders/{salesOrder}',
            [SalesOrderController::class, 'show']
        )->name('sales-orders.show');

        Route::put(
            '/sales-orders/{salesOrder}',
            [SalesOrderController::class, 'update']
        )->name('sales-orders.update');


        /*
        |--------------------------------------------------------------------------
        | SITE SETTINGS
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/settings',
            [SiteSettingController::class, 'edit']
        )->name('settings.edit');

        Route::put(
            '/settings',
            [SiteSettingController::class, 'update']
        )->name('settings.update');


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE GENERAL SETTINGS
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/homepage',
            [HomepageSettingController::class, 'edit']
        )->name('homepage.edit');

        Route::put(
            '/homepage',
            [HomepageSettingController::class, 'update']
        )->name('homepage.update');


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE HERO SLIDES
        |--------------------------------------------------------------------------
        */

        Route::prefix('homepage/slides')
            ->name('homepage.slides.')
            ->group(function () {

                Route::post(
                    '/',
                    [HomepageSlideController::class, 'store']
                )->name('store');

                Route::put(
                    '/{slide}',
                    [HomepageSlideController::class, 'update']
                )->name('update');

                Route::patch(
                    '/{slide}/toggle',
                    [HomepageSlideController::class, 'toggle']
                )->name('toggle');

                Route::patch(
                    '/{slide}/move-up',
                    [HomepageSlideController::class, 'moveUp']
                )->name('move-up');

                Route::patch(
                    '/{slide}/move-down',
                    [HomepageSlideController::class, 'moveDown']
                )->name('move-down');

                Route::delete(
                    '/{slide}',
                    [HomepageSlideController::class, 'destroy']
                )->name('destroy');
            });


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE PRODUCT CATEGORIES
        |--------------------------------------------------------------------------
        |
        | Final homepage product-card system.
        |
        */

        Route::prefix('homepage/product-categories')
            ->name('homepage.product-categories.')
            ->group(function () {

                Route::post(
                    '/',
                    [HomepageProductCategoryController::class, 'store']
                )->name('store');

                Route::put(
                    '/{productCategory}',
                    [HomepageProductCategoryController::class, 'update']
                )->name('update');

                Route::patch(
                    '/{productCategory}/toggle',
                    [HomepageProductCategoryController::class, 'toggle']
                )->name('toggle');

                Route::patch(
                    '/{productCategory}/move-up',
                    [HomepageProductCategoryController::class, 'moveUp']
                )->name('move-up');

                Route::patch(
                    '/{productCategory}/move-down',
                    [HomepageProductCategoryController::class, 'moveDown']
                )->name('move-down');

                Route::delete(
                    '/{productCategory}',
                    [HomepageProductCategoryController::class, 'destroy']
                )->name('destroy');
            });


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE LAB CARDS
        |--------------------------------------------------------------------------
        */

        Route::prefix('homepage/lab-cards')
            ->name('homepage.lab-cards.')
            ->group(function () {

                Route::post(
                    '/',
                    [HomepageLabCardController::class, 'store']
                )->name('store');

                Route::put(
                    '/{labCard}',
                    [HomepageLabCardController::class, 'update']
                )->name('update');

                Route::patch(
                    '/{labCard}/toggle',
                    [HomepageLabCardController::class, 'toggle']
                )->name('toggle');

                Route::patch(
                    '/{labCard}/move-up',
                    [HomepageLabCardController::class, 'moveUp']
                )->name('move-up');

                Route::patch(
                    '/{labCard}/move-down',
                    [HomepageLabCardController::class, 'moveDown']
                )->name('move-down');

                Route::delete(
                    '/{labCard}',
                    [HomepageLabCardController::class, 'destroy']
                )->name('destroy');
            });


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE MANUFACTURING GALLERY
        |--------------------------------------------------------------------------
        */

        Route::prefix('homepage/manufacturing-images')
            ->name('homepage.manufacturing-images.')
            ->group(function () {

                Route::post(
                    '/',
                    [HomepageManufacturingImageController::class, 'store']
                )->name('store');

                Route::put(
                    '/{manufacturingImage}',
                    [HomepageManufacturingImageController::class, 'update']
                )->name('update');

                Route::patch(
                    '/{manufacturingImage}/toggle',
                    [HomepageManufacturingImageController::class, 'toggle']
                )->name('toggle');

                Route::patch(
                    '/{manufacturingImage}/move-up',
                    [HomepageManufacturingImageController::class, 'moveUp']
                )->name('move-up');

                Route::patch(
                    '/{manufacturingImage}/move-down',
                    [HomepageManufacturingImageController::class, 'moveDown']
                )->name('move-down');

                Route::delete(
                    '/{manufacturingImage}',
                    [HomepageManufacturingImageController::class, 'destroy']
                )->name('destroy');
            });


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE STATISTICS
        |--------------------------------------------------------------------------
        */

        Route::prefix('homepage/stats')
            ->name('homepage.stats.')
            ->group(function () {

                Route::post(
                    '/',
                    [HomepageStatController::class, 'store']
                )->name('store');

                Route::put(
                    '/{stat}',
                    [HomepageStatController::class, 'update']
                )->name('update');

                Route::patch(
                    '/{stat}/toggle',
                    [HomepageStatController::class, 'toggle']
                )->name('toggle');

                Route::patch(
                    '/{stat}/move-up',
                    [HomepageStatController::class, 'moveUp']
                )->name('move-up');

                Route::patch(
                    '/{stat}/move-down',
                    [HomepageStatController::class, 'moveDown']
                )->name('move-down');

                Route::delete(
                    '/{stat}',
                    [HomepageStatController::class, 'destroy']
                )->name('destroy');
            });


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE WHY ASEW REASONS
        |--------------------------------------------------------------------------
        */

        Route::prefix('homepage/reasons')
            ->name('homepage.reasons.')
            ->group(function () {

                Route::post(
                    '/',
                    [HomepageReasonController::class, 'store']
                )->name('store');

                Route::put(
                    '/{reason}',
                    [HomepageReasonController::class, 'update']
                )->name('update');

                Route::patch(
                    '/{reason}/toggle',
                    [HomepageReasonController::class, 'toggle']
                )->name('toggle');

                Route::patch(
                    '/{reason}/move-up',
                    [HomepageReasonController::class, 'moveUp']
                )->name('move-up');

                Route::patch(
                    '/{reason}/move-down',
                    [HomepageReasonController::class, 'moveDown']
                )->name('move-down');

                Route::delete(
                    '/{reason}',
                    [HomepageReasonController::class, 'destroy']
                )->name('destroy');
            });

            /*
/*
|--------------------------------------------------------------------------
| LIVE AI CONVERSATIONS
|--------------------------------------------------------------------------
*/

Route::get(
    '/ai-conversations',
    [AiConversationController::class, 'index']
)->name('ai-conversations.index');


Route::get(
    '/ai-conversations/{conversation}',
    [AiConversationController::class, 'show']
)->name('ai-conversations.show');


Route::post(
    '/ai-conversations/{conversation}/join',
    [AiConversationController::class, 'join']
)->name('ai-conversations.join');


/*
|--------------------------------------------------------------------------
| LIVE MESSAGE POLLING
|--------------------------------------------------------------------------
*/

Route::get(
    '/ai-conversations/{conversation}/messages',
    [AiConversationController::class, 'messages']
)->name('ai-conversations.messages.index');


/*
|--------------------------------------------------------------------------
| ADMIN SEND MESSAGE
|--------------------------------------------------------------------------
*/

Route::post(
    '/ai-conversations/{conversation}/messages',
    [AiConversationController::class, 'sendMessage']
)->name('ai-conversations.messages.store');


/*
|--------------------------------------------------------------------------
| RETURN TO AI
|--------------------------------------------------------------------------
*/

Route::post(
    '/ai-conversations/{conversation}/return-to-ai',
    [AiConversationController::class, 'returnToAi']
)->name('ai-conversations.return-to-ai');


/*
|--------------------------------------------------------------------------
| CLOSE CONVERSATION
|--------------------------------------------------------------------------
*/

Route::post(
    '/ai-conversations/{conversation}/close',
    [AiConversationController::class, 'close']
)->name('ai-conversations.close');

Route::get(
    '/ai-chat-notifications',
    [AiChatNotificationController::class, 'index']
)->name('ai-chat-notifications.index');
        /*
        |--------------------------------------------------------------------------
        | LOGOUT
        |--------------------------------------------------------------------------
        */

        Route::post(
            '/logout',
            [AuthController::class, 'logout']
        )->name('logout');
    });