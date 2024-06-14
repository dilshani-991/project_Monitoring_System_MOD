<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\resetPasswordController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ArmyController;
use App\Http\Controllers\NavyController;
use App\Http\Controllers\AirforceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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



//login

Route::get('/', [HomepageController::class,'index' ])->name('homepage');

Route::get('/login', function () {
    return view('login');
});
Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/submitform', [loginController::class,'login'])->name('login.post');
// after login conncet with dashboards
Route::get('/after-signin', [loginController::class, 'dashboard'])->name('after.login');
//Apply the midileware
Route::get('/after-signin', [loginController::class, 'dashboard'])->name('after.login')->middleware('auth');



//Register form path
Route::get('/register', [loginController::class,'register']);
Route::post('/login', [loginController::class,'registerPost'])->name('register.post');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');


// reset password
Route::get('/resetpassword', function () {
    return view('pages.reset_password');
Route::get('/resetpassword', [ResetPasswordController::class, 'showResetPasswordForm'])->name('pages.reset');

});



// forget password
Route::get('/forgetpassword', function () {
    return view('pages.forget_password');
Route::get('/forgetpassword', [PasswordController::class, 'showForgetPasswordForm'])->name('forget.password');
Route::Post('/forget_password', [PasswordController::class, 'showForgetPasswordFormPost'])->name('forget.password.post');
 // forget password -email
 Route::get('/reset-password/{token}', [PasswordController::class, 'resetpassword'])->name('reset.password');
// comform new password
Route::Post('/forget_password/reset_new_password', [PasswordController::class, 'conformNewPassword'])->name('conform.password.post');

Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');

$mail=Mail::to($validated['email'])->send(new PasswordController($user,$token));

});
// contact
Route::get('/contact', function () {
    return view('pages.contact');

Route::get('/contact', [ContactController::class, 'contactform'])->name('contactus');

});



// message page
Route::get('/message', function () {
    return view('pages.message');

});

// Army pages Routes

// dashboard
Route::get('/army-dashboard', [ArmyController::class, 'armydashboard'])->name('army.dashboard');
// Army home page
Route::get('/armyhome', function () {
    return view('pages.army.home');

});
// Army project list  page
Route::get('/armyprojectlist', function () {
    return view('pages.army.project_list');

});

// Army project Time line  page
Route::get('/armyprojecttimeline', function () {
    return view('pages.army.project_timeline');

});


//Navy page Route

//dashboard
Route::get('/navy-dashboard', [NavyController::class, 'navydashboard'])->name('navy.dashboard');




//Airforce page Route

//dashboard
Route::get('/airforce-dashboard', [AirforceController::class, 'navydashboard'])->name('airforce.dashboard');






// side navbar
Route::get('/sidenavbar', function () {
    return view('pages.sidenavbar');

});


// header  page
Route::get('/welcome', function () {
    return view('pages.message');

});

Route::get('/admin', function () {
    return view('pages.admin');

});

//dashboards

// main dashboard
Route::get('/user-dashboard', [dashboardController::class, 'userdashboard'])->name('user.dashboard');

// admin dashboard
Route::get('/admin-dashboard', [dashboardController::class, 'admindashboard'])->name('admin.dashboard');


// admin page
//add projects
Route::get('/add-project', [AdminController::class, 'AddProjectForm'])->name('admin.add.project');
//view projects
Route::get('/view-project', [AdminController::class, 'ViewProjectForm'])->name('admin.view.project');
//Manage Admin
Route::get('/manage-admin', [AdminController::class, 'ManageAdminForm'])->name('.manage.admin');
//Manage User
Route::get('/manage-user', [AdminController::class, 'ManageUserForm'])->name('.manage.user');





