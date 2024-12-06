<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GeneralSettingsController;


Route::get('/', [MainSiteController::class, 'home'])->name('home');
Route::get('menu/', [MainSiteController::class, 'menu'])->name('menu');
Route::get('menu-item/', [MainSiteController::class, 'menuItem'])->name('menu.item');
Route::get('cart/', [MainSiteController::class, 'cart'])->name('cart');
Route::get('checkout/', [MainSiteController::class, 'checkout'])->name('checkout');

Route::get('about/', [MainSiteController::class, 'about'])->name('about');
Route::get('contact/', [MainSiteController::class, 'contact'])->name('contact');

Route::get('blog/', [MainSiteController::class, 'blog'])->name('blog');
Route::get('blog-details/', [MainSiteController::class, 'blogDetails'])->name('blog.details');

Route::get('login/', [MainSiteController::class, 'login'])->name('login');

/*
// Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', [MainSiteController::class, 'dashboard'])->name('admin.dashboard');
});

 */


Route::get('admin/', [AdminController::class, 'index'])->name('admin.index');
  

Route::get('admin/settings/category', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::post('admin/settings/category/store', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::post('admin/settings/category/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::post('admin/settings/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');


Route::get('admin/settings/menu', [MenuController::class, 'index'])->name('admin.menus.index');
Route::post('admin/settings/menu', [MenuController::class, 'store'])->name('admin.menus.store');
Route::patch('admin/settings/menu/{id}', [MenuController::class, 'update'])->name('admin.menus.update');
Route::delete('admin/settings/menu/{id}', [MenuController::class, 'destroy'])->name('admin.menus.destroy');

Route::get('admin/general-settings', [GeneralSettingsController::class, 'index'])->name('admin.general-settings');

// Restaurant Phone Number Routes
Route::post('admin/phone-number', [GeneralSettingsController::class, 'storePhoneNumber'])->name('admin.phone-number.store');
Route::put('admin/phone-number/{id}', [GeneralSettingsController::class, 'updatePhoneNumber'])->name('admin.phone-number.update');
Route::delete('admin/phone-number/{id}', [GeneralSettingsController::class, 'deletePhoneNumber'])->name('admin.phone-number.delete');

// Restaurant Address Routes
Route::post('admin/address', [GeneralSettingsController::class, 'storeAddress'])->name('admin.address.store');
Route::put('admin/address/{id}', [GeneralSettingsController::class, 'updateAddress'])->name('admin.address.update');
Route::delete('admin/address/{id}', [GeneralSettingsController::class, 'deleteAddress'])->name('admin.address.delete');

// Restaurant Working Hour Routes
Route::post('admin/working-hour', [GeneralSettingsController::class, 'storeWorkingHour'])->name('admin.working-hour.store');
Route::put('admin/working-hour/{id}', [GeneralSettingsController::class, 'updateWorkingHour'])->name('admin.working-hour.update');
Route::delete('admin/working-hour/{id}', [GeneralSettingsController::class, 'deleteWorkingHour'])->name('admin.working-hour.delete');

Route::post('admin/social-media-handles', [GeneralSettingsController::class, 'storeSocialMediaHandle'])->name('admin.social-media-handles.store');
Route::put('admin/social-media-handles/{id}', [GeneralSettingsController::class, 'updateSocialMediaHandle'])->name('admin.social-media-handles.update');
Route::delete('admin/social-media-handles/{id}', [GeneralSettingsController::class, 'deleteSocialMediaHandle'])->name('admin.social-media-handles.delete');
 


Route::post('admin/livechat', [GeneralSettingsController::class, 'createLiveChatScript'])->name('admin.livechat.store');
Route::put('admin/livechat/{id}', [GeneralSettingsController::class, 'updateLiveChatScript'])->name('admin.livechat.update');
Route::delete('admin/livechat/{id}', [GeneralSettingsController::class, 'destroyLiveChatScript'])->name('admin.livechat.destroy');



Route::get('admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');
Route::get('admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('admin/blog', [BlogController::class, 'store'])->name('admin.blog.store');
Route::get('admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
Route::put('admin/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
Route::delete('admin/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

 