<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function(){
    Route::view('/','welcome')->name('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomepageController::class,'index' ])->name('homepage');

Route::get('/login', function () {
    return view('login');
});
Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/submitform', [loginController::class,'login'])->name('login.post');

//Register form path
Route::get('/register', [loginController::class,'register']);
Route::post('/login', [loginController::class,'registerPost'])->name('register.post');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');


// reset password
Route::get('/resetpassword', function () {
    return view('pages.reset_password');
Route::get('/reset-password', [ResetPasswordController::class, 'resetPasswordForm'])->name('password-reset');

});


// contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// forget password
Route::get('/forgetpassword', function () {
    return view('pages.forget_password');




});
//forget password
Route::get('/forget-password', [PasswordController::class, 'showForgetPasswordForm'])->name('forget-password');

// message page
Route::get('/message', function () {
    return view('pages.message');

});



// Army home page
Route::get('/armyhome', function () {
    return view('pages.army.home');

});

// Army project list  page
Route::get('/armyprojectlist', function () {
    return view('pages.army.project_list');

});




// side navbar
Route::get('/sidenavbar', function () {
    return view('pages.army.side_navbar');

});
// header  page
Route::get('/header', function () {
    return view('pages.header');

});
