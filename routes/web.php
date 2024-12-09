<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
// Todo => Guest Routes
Route::get('/', function (){
return view('welcome');
});

Route::namespace('App\Http\Controllers\Front')->group(function() {
    Route::get('/', [IndexController::class,'index']);

    // TODO=> CONTACT US PAGE
    Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('contact-us');
    Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');

    // Add Subscriber Email
    Route::post('add-subscriber-email', 'NewsletterController@addSubscriber');

    
});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match(['get', 'post'], 'login', 'AdminController@login');


    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::match(['get', 'post'], 'update-password', 'AdminController@updatePassword');
        Route::match(['get', 'post'], 'update-details', 'AdminController@updateDetails');
        Route::post('check-current-password', 'AdminController@checkCurrentPassword');
        Route::get('logout', 'AdminController@logout');

        //Display CMS Pages (CRUD - READ)
        Route::get('cms-pages', 'CmsController@index');
        Route::post('update-cms-page-status', 'CmsController@update');
        Route::match(['get', 'post'], 'add-edit-cms-page/{id?}', 'CmsController@edit');
        Route::get('delete-cms-page/{id?}', 'CmsController@destroy');

        //Subadmins
        Route::get('subadmins', 'AdminController@subadmins');
        Route::post('update-subadmin-status', 'AdminController@updateSubadminStatus');
        Route::match(['get', 'post'], 'add-edit-subadmin/{id?}', 'AdminController@addEditSubadmin');
        Route::get('delete-subadmin/{id?}', 'AdminController@deleteSubadmin');
        Route::match(['get', 'post'], 'update-role/{id}', 'AdminController@updateRole');

        //Categories
        // Route::get('categories','CategoryController@categories');
        Route::get('categories', [CategoryController::class, 'categories']);
        Route::post('update-category-status', 'CategoryController@updateCategoryStatus');
        Route::get('delete-category/{id?}', 'CategoryController@deleteCategory');
        Route::get('delete-category-image/{id?}', 'CategoryController@deleteCategoryImage');
        // Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@addEditCategory');
        Route::match(['get', 'post'], 'add-edit-category/{id?}', [CategoryController::class, 'addEditCategory']);

        // Brands
        Route::get('brands', 'BrandController@brands');
        Route::post('update-brand-status', 'BrandController@updateBrandStatus');
        Route::get('delete-brand/{id?}', 'BrandController@deleteBrand');
        Route::match(['get', 'post'], 'add-edit-brand/{id?}', 'BrandController@addEditBrand');
        Route::get('delete-brand-image/{id?}', 'BrandController@deleteBrandImage');
        Route::get('delete-brand-logo/{id?}', 'BrandController@deleteBrandLogo');

        //Products
        // Route::get('products','ProductsController@products');
        Route::get('products', [ProductsController::class, 'products']);
        Route::post('update-product-status', 'ProductsController@updateProductStatus');
        Route::get('delete-product/{id?}', 'ProductsController@deleteProduct');
        Route::match(['get', 'post'], 'add-edit-product/{id?}', 'ProductsController@addEditProduct');

        // Product Images
        Route::get('delete-product-image/{id?}', 'ProductsController@deleteProductImage');

        // Product Video
        Route::get('delete-product-video/{id?}', 'ProductsController@deleteProductVideo');

        // Users
        Route::get('users', 'Usercontroller@users');
        Route::post('update-user-status', 'Usercontroller@updateUserStatus');


        // Banners
        Route::get('banners', 'BannersController@banners');
        Route::post('update-banner-status', 'BannersController@updateBannerStatus');
        Route::get('delete-banner/{id?}', 'BannersController@deleteBanner');
        Route::match(['get', 'post'], 'add-edit-banner/{id?}', 'BannersController@addEditBanner');

        //Todo=>Messages
        Route::get('inbox', [ContactUsController::class, 'all_messages'])->name('messages:all');
        Route::get('inbox/message/read/{id}', [ContactUsController::class, 'read_message'])->name('message:read');
        Route::get('inbox/message/reply/{id}', [ContactUsController::class, 'compose_message'])->name('message:reply');
        Route::post('inbox/reply/{id}', [ContactUsController::class, 'reply_message'])->name('send:reply');

        // Newsletters Subsribers
        Route::get('subscribers', 'NewsletterController@subscribers');
        Route::post('update-subscriber-status', 'NewsletterController@updateSubscriberStatus');
        Route::get('delete-subscriber/{id?}', 'NewsletterController@deleteSubscriberStatus');
        Route::get('export-subscribers', 'NewsletterController@exportSubscribers');

       
    });
});
