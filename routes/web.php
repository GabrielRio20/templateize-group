<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\ContributorController;

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

Auth::routes([
    
]);

Route::get('/templates/company/main', function () {
    return view('templates/company/main');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'shop'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');

//route for main page
Route::get('/', [MainController::class, 'index'])->name('home');

//route for user user index
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//route for templates
Route::get('/templates', [TemplatesController::class, 'index'])->name('templates');

//route for dashboard customer
Route::get('/dashboardCust', [CustomerController::class, 'index'])->name('dBoardCust');
Route::get('my-templates', [CustomerController::class, 'myTemp'])->name('myTemplates');
Route::get('customer-dashboard', [CustomerController::class, 'dashboardCust'])->name('customerDashboard');


//route for admin login
Route::get('/adminLoginSiniYa', [AdminController::class, 'loginSini'])->name('loginAdmin');

//route for dashboard admin
Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dBoardAdmin');
Route::get('admin-dashboard', [AdminController::class, 'dashboard'])->name('main-dashboard');

//route for dashboard contributor
Route::get('/dashboardContributor', [ContributorController::class, 'index'])->name('dBoardCont');
Route::get('contributor-dashboard', [ContributorController::class, 'dashboard'])->name('contributorDashboard');
Route::get('/upload-temp', [ContributorController::class, 'uploadTemp'])->name('cont.uploadTemp');

//route for templates shopping page
Route::get('/shop', [ShopController::class, 'index'])->name('shopping');
Route::get('/shop-create', [ShopController::class, 'create'])->name('shopping.create');
Route::post('/shop', [ShopController::class, 'store'])->name('shopping.store');

//shopping from homepage
Route::get('/', [ShopController::class, 'home']);
// Route::get('/home', [ShopController::class, 'home']);
Route::get('/search', [HomeController::class, 'search'])->name('search');

//feedback route
Route::post('/feedback', [HomeController::class, 'feedback'])->name('feedback');

//detail route
Route::get('/details/{id}', [DetailController::class, 'index'])->name('details');
// Route::get('/details', [DetailController::class, 'recommendation'])->name('recommendation');

//buy route
Route::get('/buy/{id}', [DetailController::class, 'buy'])->name('buy');

//route for checkout page
Route::get('/checkout', [DetailController::class, 'checkout'])->name('checkout');

//delete route for checkout page
Route::delete('checkout/{id}', [DetailController::class, 'delete'])->name('deleteCheckout');

//checkout confirmation route
Route::get('confirmation', [DetailController::class, 'confirmation'])->name('confirmation');

//about us
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');

//route to download
Route::get('download/{id}', [DetailController::class, 'download'])->name('download');

Route::get('/admin-feedback', [AdminController::class, 'feedback'])->name('admin.feedback');

//faq
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//Terms
Route::get('/TermsAndConditions', [HomeController::class, 'termsAndConditions'])->name('termsAndConditions');

// Contributor My Templates
Route::get('/ContributorTemplates', [ContributorController::class, 'myTemp'])->name('contributor.mytemp');

// Delete Template
Route::post('/ContributorTemplates/delete/{id}', [ContributorController::class, 'destroy'])->name('contributor.destroy');

// Edit Template Contributor
Route::get('/ContributorTemplates/edit/{id}', [ShopController::class, 'edit'])->name('shopping.edit');

//Hapus User
Route::post('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// Admin Templates
Route::get('/AdminTemplates', [AdminController::class, 'templates'])->name('admin.templates');

// Delete Template Admin
Route::post('/AdminTemplates/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

// Edit Template Admin
Route::get('/AdminTemplates/edit/{id}', [ShopController::class, 'edit2'])->name('admin.edit');

Route::get('/test/1', function () {
    return view('admin.update_template');
});