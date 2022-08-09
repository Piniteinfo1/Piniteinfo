<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [App\Http\Controllers\ApiController::class, 'login'])->name('login');

Route::post('/sms', [App\Http\Controllers\SmsController::class, 'sms'])->name('sms');
Route::post('/MobileOtpVerify', [App\Http\Controllers\SmsController::class, 'MobileOtpVerify'])->name('MobileOtpVerify');

Route::post('/register', [App\Http\Controllers\ApiController::class, 'register'])->name('register');
Route::post('/AddUserCategory', [App\Http\Controllers\user\CategoryController::class, 'AddUserCategory'])->name('AddUserCategory');
Route::post('/UserCategory', [App\Http\Controllers\user\CategoryController::class, 'UserCategory'])->name('UserCategory');


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('/UploadInteriorDesign', [App\Http\Controllers\InteriorDesignerController::class, 'UploadInteriorDesign'])->name('UploadInteriorDesign');
Route::post('/logout', [App\Http\Controllers\ApiController::class, 'logout'])->name('logout');
 // Route::get('logout', [ApiController::class, 'logout']);
Route::post('/SendPdfQuatationToUser', [App\Http\Controllers\InteriorDesignerController::class, 'SendPdfQuatationToUser'])->name('SendPdfQuatationToUser');
Route::post('/GetImage', [App\Http\Controllers\InteriorDesignerController::class, 'GetImage'])->name('GetImage');
Route::get('/UserProfile', [App\Http\Controllers\user\ProfileController::class, 'UserProfile'])->name('UserProfile');
Route::post('/UserProfilePhotoEdit', [App\Http\Controllers\user\ProfileController::class, 'UserProfilePhotoEdit'])->name('UserProfilePhotoEdit');
Route::post('/UserProfileDataEdit', [App\Http\Controllers\user\ProfileController::class, 'UserProfileDataEdit'])->name('UserProfileDataEdit');
Route::post('/ConfirmPasswordChange', [App\Http\Controllers\user\PasswordController::class, 'ConfirmPasswordChange'])->name('ConfirmPasswordChange');
Route::get('/DesignsToUsers', [App\Http\Controllers\user\DesignsController::class, 'DesignsToUsers'])->name('DesignsToUsers');
Route::get('/PopularDesigns', [App\Http\Controllers\user\DesignsController::class, 'PopularDesigns'])->name('PopularDesigns');
Route::post('/MessageToDesigner', [App\Http\Controllers\user\ChatController::class, 'MessageToDesigner'])->name('MessageToDesigner');
Route::get('/GetMessages', [App\Http\Controllers\user\ChatController::class, 'GetMessages'])->name('GetMessages');
Route::post('/GetChat', [App\Http\Controllers\user\ChatController::class, 'GetChat'])->name('GetChat');

Route::post('/ParticularImage', [App\Http\Controllers\InteriorDesignerController::class, 'ParticularImage'])->name('ParticularImage');
Route::post('/InteriorDesignDelete', [App\Http\Controllers\InteriorDesignerController::class, 'InteriorDesignDelete'])->name('InteriorDesignDelete');
Route::post('/VendorProductsUpload', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'VendorProductsUpload'])->name('VendorProductsUpload');
Route::post('/InactivateAndActiveProduct', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'InactivateAndActiveProduct'])->name('InactivateAndActiveProduct');
Route::post('/SingleProduct', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'SingleProduct'])->name('SingleProduct');
Route::get('/VendorInactiveProducts', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'VendorInactiveProducts'])->name('VendorInactiveProducts');
Route::get('/ProductsToDesigners', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'ProductsToDesigners'])->name('ProductsToDesigners');
Route::get('/ProductsToVendor', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'ProductsToVendor'])->name('ProductsToVendor');
Route::post('/DeleteVendorProducts', [App\Http\Controllers\vendor\VendorUploadDesignsController::class, 'DeleteVendorProducts'])->name('DeleteVendorProducts');
Route::get('/SendImagesToParticularDesigner', [App\Http\Controllers\InteriorDesignerController::class, 'SendImagesToParticularDesigner'])->name('SendImagesToParticularDesigner');
Route::post('/ParticularDesignerData', [App\Http\Controllers\InteriorDesignerController::class, 'ParticularDesignerData'])->name('ParticularDesignerData');

Route::post('/Like', [App\Http\Controllers\Like\LikesController::class, 'Like'])->name('Like');
Route::post('/Unlike', [App\Http\Controllers\Like\LikesController::class, 'Unlike'])->name('Unlike');
Route::get('/ParticularUserLikes', [App\Http\Controllers\Like\LikesController::class, 'ParticularUserLikes'])->name('ParticularUserLikes');
Route::post('/LikesCount', [App\Http\Controllers\Like\LikesController::class, 'LikesCount'])->name('LikesCount');
Route::post('/CommentToDesign', [App\Http\Controllers\Like\LikesController::class, 'CommentToDesign'])->name('CommentToDesign');
Route::post('/ListOfComments', [App\Http\Controllers\Like\LikesController::class, 'ListOfComments'])->name('ListOfComments');

Route::get('/PublicDesigns', [App\Http\Controllers\InteriorDesignerController::class, 'PublicDesigns'])->name('PublicDesigns');
Route::get('/GetVedios', [App\Http\Controllers\InteriorDesignerController::class, 'GetVedios'])->name('GetVedios');
Route::get('/GetImages', [App\Http\Controllers\InteriorDesignerController::class, 'GetImages'])->name('GetImages');
Route::get('/Get360', [App\Http\Controllers\InteriorDesignerController::class, 'Get360'])->name('Get360');

Route::get('/CategoryList', [App\Http\Controllers\category\categorycontroller::class, 'CategoryList'])->name('CategoryList');
Route::post('/SubCategoryList', [App\Http\Controllers\category\categorycontroller::class, 'SubCategoryList'])->name('SubCategoryList');
Route::post('/FollowDesigners', [App\Http\Controllers\Follow\FollowDesignersController::class, 'FollowDesigners'])->name('FollowDesigners');
Route::get('/Designers', [App\Http\Controllers\Follow\FollowDesignersController::class, 'Designers'])->name('Designers');
// Route::get('/DesignerSearch', [App\Http\Controllers\Follow\FollowDesignersController::class, 'DesignerSearch'])->name('DesignerSearch');

Route::post('/searchdesignerdata', [App\Http\Controllers\Search\SearchController::class, 'searchdesignerdata'])->name('searchdesignerdata');
Route::post('/SearchFilter', [App\Http\Controllers\Search\SearchController::class, 'SearchFilter'])->name('SearchFilter');
Route::post('/savedesign', [App\Http\Controllers\InteriorDesignerController::class, 'SaveDesign'])->name('SaveDesign');
Route::post('/GetSavedDesigns', [App\Http\Controllers\InteriorDesignerController::class, 'GetSavedDesigns'])->name('GetSavedDesigns');
Route::get('/SavedDesigns', [App\Http\Controllers\InteriorDesignerController::class, 'SavedDesigns'])->name('SavedDesigns');
Route::get('/SavedDesignId', [App\Http\Controllers\InteriorDesignerController::class, 'SavedDesignId'])->name('SavedDesignId');

// vendor brands category and sub category etc
Route::get('/Vendor/Brands', [App\Http\Controllers\vendor\category\CategoryController::class, 'brands'])->name('vendor-brands');
Route::get('/Vendor/Category', [App\Http\Controllers\vendor\category\CategoryController::class, 'categories'])->name('vendor-category');
Route::get('/Vendor/subcategories', [App\Http\Controllers\vendor\category\CategoryController::class, 'subcategories'])->name('vendor-subcategories');
Route::get('/Vendor/spaces', [App\Http\Controllers\vendor\category\CategoryController::class, 'spaces'])->name('vendor-spaces');


// productcount
Route::get('/Vendor/productcount', [App\Http\Controllers\vendor\category\CategoryController::class, 'productcount'])->name('vendor-productcount');
Route::post('/Vendor/bankdetails', [App\Http\Controllers\vendor\category\CategoryController::class, 'bankdetails'])->name('vendor-bankdetails');
Route::post('/Vendor/bankdetails', [App\Http\Controllers\vendor\category\CategoryController::class, 'bankdetails'])->name('vendor-bankdetails');
Route::post('/Vendor/BankDetailsUpdate', [App\Http\Controllers\vendor\category\CategoryController::class, 'BankDetailsUpdate'])->name('vendor-BankDetailsUpdate');
Route::post('/Vendor/BankDetailsDelete', [App\Http\Controllers\vendor\category\CategoryController::class, 'BankDetailsDelete'])->name('vendor-BankDetailsDelete');
Route::post('/Vendor/AddBussiness', [App\Http\Controllers\vendor\BussinessController::class, 'AddBussiness'])->name('vendor-AddBussiness');
Route::get('/Vendor/GetBussiness', [App\Http\Controllers\vendor\BussinessController::class, 'GetBussiness'])->name('vendor-GetBussiness');
Route::post('/Vendor/BussinessUpdate', [App\Http\Controllers\vendor\BussinessController::class, 'BussinessUpdate'])->name('vendor-BussinessUpdate');
Route::post('/Vendor/BussinessDelete', [App\Http\Controllers\vendor\BussinessController::class, 'BussinessDelete'])->name('vendor-BussinessDelete');
Route::post('/EmailUpdate', [App\Http\Controllers\user\ProfileController::class, 'EmailUpdate'])->name('EmailUpdate');

// vendor orders
Route::post('/GetOrders', [App\Http\Controllers\vendor\OrdersController::class, 'GetOrders'])->name('GetOrders');
Route::post('/Orderstatus', [App\Http\Controllers\vendor\OrdersController::class, 'Orderstatus'])->name('Orderstatus');
Route::post('/Orderstatuspics', [App\Http\Controllers\vendor\OrdersController::class, 'Orderstatuspics'])->name('Orderstatuspics');

// review product
Route::post('/Reviewproducts', [App\Http\Controllers\vendor\ReviewController::class, 'Reviewproduct'])->name('Reviewproducts');
Route::post('/ParticularReview', [App\Http\Controllers\vendor\ReviewController::class, 'ParticularReview'])->name('ParticularReview');

//ReportProduct
Route::post('/ReportProduct', [App\Http\Controllers\vendor\ReportsController::class, 'ReportProduct'])->name('ReportProduct');
Route::post('/ParticularProductReports', [App\Http\Controllers\vendor\ReportsController::class, 'ParticularProductReports'])->name('ParticularProductReports');

});
















Route::post('/user', [App\Http\Controllers\DataController::class, 'UserCheck'])->name('user');
Route::post('/selectcategories', [App\Http\Controllers\DataController::class, 'SelectCategories'])->name('selectcategories');
Route::get('/categoriesList', [App\Http\Controllers\DataController::class, 'categoriesList'])->name('categoriesList');
Route::post('/ContactDesigner', [App\Http\Controllers\user\ContactDesignerController::class, 'ContactDesigner'])->name('ContactDesigner');
Route::post('/messagedesigner', [App\Http\Controllers\user\ChatController::class, 'MessageToDesigner'])->name('messagedesigner');

