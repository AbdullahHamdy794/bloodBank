<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\authController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\MAinController;
// use App\Http\Controllers\Front\MAinController;
use App\Http\Controllers\GovernorateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModonController;
use App\Http\Controllers\notifictionController;
use App\Http\Controllers\postController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\userController;
use App\Models\Contact;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', function () {

    return view('auth.userLogin');
});






Auth::routes();

Route::get('/theMain',[MAinController::class,'home']);
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Auth::routes(['verify'=>true]);
Route::get('who-are-you',[SiteController::class,'whoAreYOu']);
Route::get('post',[SiteController::class,'posts']);
Route::get('aboutUs',[SiteController::class,'aboutUs']);
Route::get('talabat',[SiteController::class,'donation']);
Route::get('contactUs',[SiteController::class,'contactUs']);
Route::post('createSetting',[SiteController::class,'sendmessage']);




//////////////////////////ADMIN///////////////////////////////////




Route::prefix('admin')->group(function () {

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('governorate', GovernorateController::class);
Route::resource('theCity', ModonController::class);
Route::resource('posts', postController::class);
Route::resource('donation',donationController::class );
Route::resource('category',categoryController::class );
Route::resource('notification',notifictionController::class);
Route::resource('setting', SettingController::class);
Route::resource('contacts',contactController::class);
Route::resource('users', UserController::class);




});
Route::get('/index',[MAinController::class,'home']);
Route::get('register',[authController::class,'register']);

Route::middleware('auth:client-web')->group(function () {


    Route::post('toggle-favourite',[SiteController::class,'toogleFavourite'])->name('toggle-favourite');


});
//  Route::get('/home', [HomeController::class, 'index'])->name('home');




 Route::get('user/Login',[SiteController ::class,'UserLogin']);
 Route::post('userLogin',[SiteController::class,'checkUser'])->name('save.user.login');

Route::post('createNewClient',[SiteController::class,'create']);

