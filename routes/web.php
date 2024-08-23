<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MobileRegistrationController;


Auth::routes();

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/address', [PageController::class, 'address'])->name('address');
Route::get('/canceling', [PageController::class, 'canceling'])->name('canceling');
Route::get('/booking', [PageController::class, 'booking'])->name('booking');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/checkout/{id}', [PageController::class, 'checkout'])->name('checkout');
Route::get('/checkout2/{id}', [PageController::class, 'checkout2'])->name('checkout2');
Route::get('/cashondelivery/{id}', [PageController::class, 'cod'])->name('cashondelivery');
Route::get('/figma', [PageController::class, 'figma'])->name('figma');
Route::get('/incoming', [PageController::class, 'incoming'])->name('incoming');
Route::get('/nineteen', [PageController::class, 'nineteen'])->name('nineteen');
Route::get('/ordercancel', [PageController::class, 'ordercancel'])->name('ordercancel');
Route::get('/orderplaced', [PageController::class, 'orderplaced'])->name('orderplaced');
Route::get('/payment', [PageController::class, 'payment'])->name('payment');
Route::get('/termes-and-conditions', [PageController::class, 'termsAndConditions'])->name('termes-and-conditions');
Route::get('servicesdetails/{id}', [App\Http\Controllers\ServicesController::class, 'servicesdetails'])->name('servicesdetails');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('load-more-services', [App\Http\Controllers\ServicesController::class, 'loadMore'])->name('services.load-more');
Route::get('/service', [App\Http\Controllers\ServicesController::class, 'services'])->name('service');
Route::post('contact-us', [App\Http\Controllers\AdminController::class, 'contact'])->name('contact-us');
Route::post('checkoutdata', [App\Http\Controllers\CheckoutController::class, 'checkoutdata'])->name('checkoutdata');
Route::post('payment', [App\Http\Controllers\CheckoutController::class, 'payment'])->name('payment');
Route::post('cod', [App\Http\Controllers\CheckoutController::class, 'cod'])->name('cod');
Route::post('/otp-register', [MobileRegistrationController::class, 'register'])->name('otp-register');
Route::post('/verify-otp', [MobileRegistrationController::class, 'verifyOtp'])->name('verify-otp');
// Route::get('/verify-otp-modal', [MobileRegistrationController::class, 'verifyOtpModal'])->name('verify-otp-modal');
// Route::get('/verify-otp-modal', 'YourController@verifyOtpModal')->name('verify-otp-modal');
Route::post('/logout', [MobileRegistrationController::class, 'logout'])->name('logout');

//admin routes
Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'admin'])->name('admin.dashboard');
//services route
Route::resource('/admin/services',\App\Http\Controllers\ServicesController::class);
Route::get('/admin/services/destroy/{id}', [App\Http\Controllers\ServicesController::class, 'delete'])->name('admin.services.delete');
Route::post('services-store',[App\Http\Controllers\ServicesController::class, 'store'])->name('services-store');
//addonservice
Route::resource('/admin/addonservices',\App\Http\Controllers\AddonserviceController::class);
Route::get('/admin/addonservices/destroy/{id}', [App\Http\Controllers\AddonserviceController::class, 'delete'])->name('admin.addonservices.delete');
//gallery
Route::resource('/admin/gallery',\App\Http\Controllers\GalleryController::class);
Route::get('/admin/gallery/destroy/{id}', [App\Http\Controllers\GalleryController::class, 'delete'])->name('admin.gallery.delete');
//carrier
Route::get('admin/carrier',[App\Http\Controllers\AdminController::class, 'carrier'])->name('admin.carrier');
Route::post('carrier-post',[App\Http\Controllers\AdminController::class, 'store'])->name('carrier-post');
//experts
Route::resource('/admin/expert',\App\Http\Controllers\ExpertController::class);
Route::get('/admin/expert/destroy/{id}', [App\Http\Controllers\ExpertController::class, 'delete'])->name('admin.expert.delete');

//package
Route::resource('/admin/package',\App\Http\Controllers\PackageController::class);
Route::get('/admin/package/destroy/{id}', [App\Http\Controllers\ExpertController::class, 'delete'])->name('admin.package.delete');

//contact
Route::get('admin/contact-index',[App\Http\Controllers\AdminController::class, 'contactus'])->name('admin.contact-index');

// Route::get('admin/services-create',[App\Http\Controllers\ServicesController::class, 'create'])->name('admin.services-create');

