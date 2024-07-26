<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\resetPasswordController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ArmyController;
use App\Http\Controllers\NavyController;
use App\Http\Controllers\AirforceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\ProjectProposalController;
use App\Http\Controllers\AddProjectController;



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

// login part accoding tho the video

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// normal user route list
Route::middleware(['auth','user-access::user'])->group(function(){
    Route::post('/user-dashboard', [HomeController::class,'index'])->name('user.dashboard');



});

// admin route list
Route::middleware(['auth','user-access::admin'])->group(function(){
    Route::post('/admin-dashboard', [HomeController::class,'adminHome'])->name('admin.dashboard');


});
Route::middleware(['auth', 'user_access:army'])->group(function () {
    Route::get('/army/dashboard', [HomeController::class, 'armyHome'])->name('army.dashboard');
});
Route::middleware(['auth', 'user_access:airforce'])->group(function () {
    Route::get('/airforce/dashboard', [HomeController::class, 'airforceHome'])->name('airforce.dashboard');
});





Route::get('/airforce/dashboard', [AirforceController::class, 'airforceHome'])->name('airforce.dashboard');



















Route::get('/', [HomepageController::class,'index' ])->name('homepage');

/*
Route::get('/login', function () {
    return view('login');
});
Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/submitform', [loginController::class,'login'])->name('login.post');
// after login conncet with dashboards
Route::get('/after-signin', [loginController::class, 'dashboard'])->name('after.login');
//Apply the midileware
Route::get('/dashboard', function () {
    return view('/user-dashboard');
})->middleware('auth')->name('dashboard');



//Register form path
Route::get('/register', [loginController::class,'register']);
Route::post('/login', [loginController::class,'registerPost'])->name('register.post');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');*/


// reset password
Route::get('/resetpassword', function () {
    return view('pages.reset_password');
Route::get('/resetpassword', [resetPasswordController::class, 'showResetPasswordForm'])->name('pages.reset');

});



// forget password
Route::get('/reset-password', function () {
    return view('pages.reset_password');
});
Route::get('/forgetpassword', function () {
    return view('pages.forget_password');
/*Route::get('/forgetpassword', [PasswordController::class, 'showForgetPasswordForm'])->name('forget.password');
Route::Post('/forget_password', [PasswordController::class, 'showForgetPasswordFormPost'])->name('forget.password.post');
 // forget password -email
 Route::get('/reset-password/{token}', [PasswordController::class, 'resetpassword'])->name('reset.password');
// comform new password
Route::Post('/forget_password/reset_new_password', [PasswordController::class, 'conformNewPassword'])->name('conform.password.post');

Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');

$mail=Mail::to($validated['email'])->send(new PasswordController($user,$token));*/
Route::get('/password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.reset');

// Process the reset password form
Route::post('/password/reset', [PasswordResetController::class, 'resetPassword'])->name('password.update');


});
// contact
Route::get('/contact', function () {
    return view('pages.contact');

});

Route::Post('/contact', [ContactController::class, 'submit'])->name('contact.submit');




// message page
Route::get('/message', function () {
    return view('pages.message');

});


//dashboards

// main dashboard
Route::get('/user-dashboard', [dashboardController::class, 'userdashboard'])->name('user.dashboard');
// admin dashboard
Route::get('/admin-dashboard', [dashboardController::class, 'admindashboard'])->name('admin.dashboard');
// navy dashboard

Route::get('/navy-dashboard', [HomeController::class,'navyHome'])->name('navy.dashboard');
// army dashboard
Route::get('/army-dashboard', [ArmyController::class, 'armydashboard'])->name('army.dashboard');
//dashboard
Route::get('/airforce-dashboard', [AirforceController::class, 'airforcedashboard'])->name('airforce.dashboard');




// Army pages Routes


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






//Airforce page Route






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




// admin page
//add projects
Route::get('/add-project', [AdminController::class, 'AddProjectForm'])->name('admin.add.project');
//view projects
Route::get('/view-project', [AdminController::class, 'ViewProjectForm'])->name('admin.view.project');
//Manage Admin
Route::get('/manage-admin', [AdminController::class, 'ManageAdminForm'])->name('.manage.admin');
//Manage User
Route::get('/manage-user', [AdminController::class, 'ManageUserForm'])->name('.manage.user');
// manage user
Route::get('/manage-user', [UserController:: class, 'index'])->name('manage-user');
Route::delete('/manage-user/{id}', [UserController::class, 'destroy'])->name('manage-user.destroy');
//manage admin
Route::get('/manage-admin', [AdminController:: class, 'index'])->name('manage-admin');
Route::delete('/manage-admin/{id}', [AdminController::class, 'destroy'])->name('manage-admin.destroy');
// projet proposal
Route::get('/project- proposal', [AdminController:: class, 'ProjectProposal'])->name('project.propsal');
Route::get('/admin/download-proposal/{id}', [AdminController::class, 'downloadProposal'])->name('admin.downloadProposal');
Route::get('/admin/file-size/{id}', [AdminController::class, 'getFileSize'])->name('admin.getFileSize');
Route::get('/admin/verify-file-paths', [AdminController::class, 'verifyFilePaths'])->name('admin.verifyFilePaths');
Route::get('/admin/project_proposal', [ProjectProposalController::class, 'index'])->name('admin.project_proposal');

// add project
Route::get('/add-project', [AddProjectController::class, 'AddProjectForm'])->name('admin.add_project');


Route::post('/add-project/store', [AddProjectController::class, 'FormStore'])->name('project.store');




// application

Route::get('/application', function () {
    return view('pages.application.form');
})->name('project_form');

//form controller
Route::get('/project_form', [ApplicationFormController::class, 'create'])->name('project_form.create');
Route::post('/project_form', [ApplicationFormController::class, 'store'])->name('project_form.store');
Route::get('/project-form/download/{id}', [ApplicationFormController::class, 'download'])->name('project_form.download');
Route::get('/admin/proposal', [AdminController::class, 'proposal'])->name('admin.proposal');
Route::get('/admin/proposal/download/{id}', [AdminController::class, 'downloadProposal'])->name('admin.proposal.download');
Route::get('/admin/proposal', [App\Http\Controllers\AdminController::class, 'proposal']);

Route::get('/admin/proposal', function () {
    return view('pages.admin.project_proposal');
})->name('admin.proposal');




// project_detsils form 1-4
Route::get('/project_details', [ApplicationController::class, 'showProjectForm'])->name('show_project_form');
Route::post('/form_project_details', [ApplicationController::class, 'storeProjectDetails'])->name('store_project_details');

//Preliminary Activities- 5
Route::get('/Preliminary_Activities', [ApplicationController::class, 'preliminaryActivity'])->name('view.Activity');

//project objective 6-7

Route::get('/project_objective', [ApplicationController::class, 'showProjectobject'])->name('project.objective');

// relationship -8-9
Route::get('/relationship', [ApplicationController::class, 'relationship'])->name('relationship');

// project impacts 10
Route::get('/project-impacts', [ApplicationController::class, 'projectImpacts'])->name('project.Impacts');

//11-12-13
Route::get('/aling-project', [ApplicationController::class, 'aligningProject'])->name('project.Impacts');

// risk  14-15
Route::get('/risk', [ApplicationController::class, 'risk'])->name('risk');

//financing part - 16 -17
Route::get('/financing-plan', [ApplicationController::class, 'FinancingPlan'])->name('budget.plan');

// 18/19/20/
Route::get('/implementation', [ApplicationController::class, 'genderImplementation'])->name('budget.plan');
// 21/22/23 - implementation Arrangements
Route::get('/implementation-arrangements', [ApplicationController::class, 'implementationArrangements'])->name('budget.plan');
//24- Applicant Information
Route::get('/applicant-information', [ApplicationController::class, 'applicantInformation'])->name('applicant.info');





