<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::namespace('App\Http\Controllers\Admin')->controller(AdminController::class)->prefix('/admin')->group(function (){
    Route::match(['get', 'post'], 'login', 'login')->name('adminLogin');
    
    Route::group(['middleware'=>['admin']], function() {
        Route::get('dashboard', 'dashboard')->name('adminDashboard');
        // Route::post('check-current-password', 'checkAdminPassword');
        Route::match(['get', 'post'], 'update-profile', 'updateAdminProfile')->name('updateAdminProfile');
        Route::match(['get', 'post'], 'update-password', 'updateAdminPassword')->name('updateAdminPassword');
        Route::match(['get', 'post'], 'update-vendor-details/{slug}', 'updateVendorDetails')->name('updateVendorDetails');
        Route::get('logout', 'logout')->name('adminLogout'); 
    });
    Route::group(['middleware'=>['admin']], function() {
        Route::get('admins/{type?}', 'adminLists')->name('adminLists');
        // Route::get('vendors', 'vendorLists')->name('vendorLists');
        // Route::get('customers', 'customerLists')->name('customerLists');
        
    });
});
