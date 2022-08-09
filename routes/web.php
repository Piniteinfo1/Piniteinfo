<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Admin\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/CheckUser', [App\Http\Controllers\web\CheckUserController::class, 'CheckUser'])->name('CheckUser');
/// new vendor dashboard

// page-categories.html
Route::get('/vendor/Dashboard', [App\Http\Controllers\web\vendor\VendorProductController::class, 'VendorDashboard'])->name('VendorDashboard');
Route::get('/vendor/productslist', [App\Http\Controllers\web\vendor\VendorProductController::class, 'VendorProductsList'])->name('VendorProductsList');
Route::get('/vendor/gridview', [App\Http\Controllers\web\vendor\VendorProductController::class, 'VendorProductsview'])->name('VendorProductsview');
Route::get('/vendor/orders', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendororderslist'])->name('vendororderslist');
Route::get('/vendor/order/details/{id}', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendororderdetails'])->name('vendororderdetails');
Route::get('/vendor/categories', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendorcategories'])->name('vendorcategories');
Route::get('/vendor/view/status', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendorviewstatus'])->name('vendorviewstatus');
Route::post('/addspace', [App\Http\Controllers\web\vendor\VendorProductController::class, 'addspace'])->name('addspace');
Route::post('/addsubcategory', [App\Http\Controllers\web\vendor\VendorProductController::class, 'addsubcategory'])->name('addsubcategory');


// Route::get('/vendor/orders/details', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendorordersdetails'])->name('vendorordersdetails');

// page-view-status.html
//// vendor 
Route::get('/vendor/addproduct/page', [App\Http\Controllers\web\vendor\VendorProductController::class, 'VendorAddProductView'])->name('vendor_addproduct');

Route::post('/vendor/addproduct', [App\Http\Controllers\web\vendor\VendorProductController::class, 'VendorProductAdd'])->name('VendorProductAdd');
Route::get('/productlist', [App\Http\Controllers\web\vendor\VendorProductController::class, 'VendorProductsList'])->name('VendorProductsList');
Route::get('/Productdelete/{val?}', [App\Http\Controllers\web\vendor\VendorProductController::class, 'Productdelete'])->name('Productdelete');
Route::get('/Productinactive/{data?}', [App\Http\Controllers\web\vendor\VendorProductController::class, 'Productinactive'])->name('Productinactive');
Route::post('/productstatusupdate/{id}', [App\Http\Controllers\web\vendor\VendorProductController::class, 'productstatusupdate'])->name('productstatusupdate');


// edit vendor profile 
Route::get('/editprofile', [App\Http\Controllers\web\vendor\EditProfileController::class, 'editprofile'])->name('editprofile');
Route::post('/editprofiledetails', [App\Http\Controllers\web\vendor\EditProfileController::class, 'editprofiledetails'])->name('editprofiledetails');
Route::get('/bussinessdetails', [App\Http\Controllers\web\vendor\EditProfileController::class, 'bussinessdetails'])->name('bussinessdetails');
Route::post('/updatebussinessdetails', [App\Http\Controllers\web\vendor\EditProfileController::class, 'updatebussinessdetails'])->name('updatebussinessdetails');

Route::post('/updatebusinesslogo', [App\Http\Controllers\web\vendor\EditProfileController::class, 'updatebusinesslogo'])->name('updatebusinesslogo');

// page-account-register.html
// page-settings-1.html

// product orders

Route::get('vendorallorders/', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendorallorders'])->name('vendorallorders');
Route::get('vendororders/', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendororders'])->name('vendororders');
Route::get('vendorprocessingorders/', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendorprocessingorders'])->name('vendorprocessingorders');
Route::get('vendorcompletedorders/', [App\Http\Controllers\web\vendor\VendorProductController::class, 'vendorcompletedorders'])->name('vendorcompletedorders');
Route::get('vendor/orderchangestatus/', [App\Http\Controllers\web\vendor\VendorProductController::class, 'orderchangestatus'])->name('orderchangestatus');
Route::get('dailyupdate/{id}', [App\Http\Controllers\web\vendor\VendorProductController::class, 'dailyupdate'])->name('dailyupdate');


/// Registration

Route::get('Vendorregistration', [App\Http\Controllers\web\RegistrationController::class, 'Vendorregistration'])->name('Vendorregistration');
Route::post('vendorregister', [App\Http\Controllers\web\RegistrationController::class, 'vendorregister'])->name('vendorregister');

////logout 

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// end of vendor
Route::get('/h', [App\Http\Controllers\Admin\AdminController::class, 'h'])->name('h');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Test', [App\Http\Controllers\InteriorDesignerController::class, 'Test'])->name('Test');
// Admin Dashboard
Route::get('/Admin', [App\Http\Controllers\Admin\AdminController::class, 'Admin'])->name('Admin');
Route::get('/Admin-houseowners-list', [App\Http\Controllers\Admin\AdminController::class, 'HouseownersList'])->name('Admin-houseowners-list');
Route::get('/Admin-designer-list', [App\Http\Controllers\Admin\AdminController::class, 'DesignerList'])->name('Admin-designer-list');
Route::get('/Admin-Vendors-List', [App\Http\Controllers\Admin\AdminController::class, 'VendorsList'])->name('Admin-Vendors-List');
Route::get('/Admin-houseowner-View', [App\Http\Controllers\Admin\AdminController::class, 'Houseownerview'])->name('Admin-houseowner-View');
Route::get('Admin-user-edit/{id?}', [AdminController::class, 'UserEdit'])->name('Admin-user-edit');
Route::post('Admin-user-update/{id?}', [App\Http\Controllers\Admin\AdminController::class, 'userupdate'])->name('Admin-user-update');
Route::get('/Admin-Viewall-products', [App\Http\Controllers\Admin\AdminController::class, 'AdminViewallproducts'])->name('Admin-Viewall-products');
Route::get('/Admin-Analytics', [App\Http\Controllers\Admin\AdminController::class, 'AdminAnalytics'])->name('Admin-Analytics');
Route::get('/Admin-email', [App\Http\Controllers\Admin\AdminController::class, 'AdminEmail'])->name('Admin-email');
Route::get('/Admin-chat', [App\Http\Controllers\Admin\AdminController::class, 'AdminChat'])->name('Admin-chat');
// app-chat.html

// 
Route::get('/Admin-dashboard-ecommerce', [App\Http\Controllers\Admin\AdminController::class, 'Adminecommerce'])->name('Admin-dashboard-ecommerce');
Route::get('/Admin-dashboard-ecommerce', [App\Http\Controllers\Admin\AdminController::class, 'Adminecommerce'])->name('Admin-dashboard-ecommerce');
Route::get('/Admin-app-todo', [App\Http\Controllers\Admin\AdminController::class, 'Adminetodo'])->name('Admin-app-todo');
Route::get('/Admin-app-calendar', [App\Http\Controllers\Admin\AdminController::class, 'Admincalander'])->name('Admin-app-calendar');
Route::get('/Admin-kanban', [App\Http\Controllers\Admin\AdminController::class, 'Adminkanban'])->name('Admin-kanban');
Route::get('/Admin-user-profile', [App\Http\Controllers\Admin\AdminController::class, 'Adminprofile'])->name('Admin-user-profile');
Route::get('/Admin-page-products', [App\Http\Controllers\Admin\AdminController::class, 'Adminproducts'])->name('Admin-page-products');
// page-user-profile.html


