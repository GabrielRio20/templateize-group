<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TemplatesController;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/template', function () {
//     return view('./home/category');
// });

// Route::get('/templates/company/main', [UmbrellaController::class, 'home']);
// Route::get('/t_virus', [UmbrellaController::class, 'tVirus']);
// Route::get('/g_virus', [UmbrellaController::class, 'gVirus']);
// Route::get('/parasite', [UmbrellaController::class, 'parasite']);

Route::get('/templates/company/main', function () {
    return view('templates/company/main');
});

// Route::get('/register', [PersonalController::class, 'register']);
// Route::get('/login', [PersonalController::class, 'login']);

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

//route for dashboard admin
Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dBoardAdmin');

//route for templates shopping page
Route::get('/shop', [ShopController::class, 'index'])->name('shopping');
Route::get('/shop-create', [ShopController::class, 'create'])->name('shopping.create');
Route::post('/shop', [ShopController::class, 'store'])->name('shopping.store');

//shopping from homepage
Route::get('/', [ShopController::class, 'home']);
// Route::get('/home', [ShopController::class, 'home']);

//detail route
Route::get('/details/{id}', [DetailController::class, 'index'])->name('details');

//buy route
Route::get('/buy/{id}', [DetailController::class, 'buy'])->name('buy');

//route for checkout page
Route::get('/checkout', [DetailController::class, 'checkout'])->name('checkout');

//about us
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');

