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

//route for dashboard admin
Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dBoardAdmin');
Route::get('admin-dashboard', [AdminController::class, 'dashboard'])->name('main-dashboard');

//route for dashboard contributor
Route::get('/dashboardContributor', [ContributorController::class, 'index'])->name('dBoardCont');
Route::get('contributor-dashboard', [ContributorController::class, 'dashboard'])->name('contributorDashboard');
Route::get('upload-temp', [ContributorController::class, 'uploadTemp'])->name('uploadTemp');

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

Route::get('/form', function() {
    return view('shopping_page.create1');
});
//faq
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//Term of Use
Route::get('/TermsOfUse', [HomeController::class, 'termsOfUse'])->name('termsOfUse');

