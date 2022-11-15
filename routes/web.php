<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\UserController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route for main page
Route::get('/', [MainController::class, 'index'])->name('home');

//route for user user index
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//route for templates
Route::get('/templates', [TemplatesController::class, 'index'])->name('templates');

Route::get('/Dashboard-Customer', function () {
    return view('d_board_cust');
});
