<?php
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UpdateInfoController;
use App\Http\Controllers\Backend\RequestsController;
use App\Http\Controllers\Backend\RegisteredDriverController;
use App\Http\Controllers\Backend\RegisteredUserController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use App\Http\Controllers\Backend\StationsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AmbulanceController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\AmbulanceController as FrontendAmbulance;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AboutController;

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
Route::get('/',[FrontendHome::class,'home'])->name('home');

Route::get('/ambulance',[FrontendAmbulance::class,'ambulance'])->name('ambulance');

Route::get('/about',[AboutController::class,'about'])->name('about');
// //login here
Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/login/post',[UserController::class,'doLogin'])->name('user.do.login');


Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');


// Driver signup
Route::get('/driver/signup',[UserController::class,'driversignupForm'])->name('driver.signup');



Route::group(['prefix'=>'user','middleware'=>'auth'],function (){
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
});



//admin panel routes

Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');
Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){
 

    Route::get('/',[HomeController::class,'home'])->name('dashboard');
    Route::get('/logout',[BackendUser::class,'logout'])->name('logout');

    Route::get('/ambulances',[AmbulanceController::class,'list'])->name('ambulances.list');
    Route::post('/ambulances/store',[AmbulanceController::class,'store'])->name('ambulances.store');
    Route::get('/ambulances/delete/{id}',[AmbulanceController::class,'delete'])->name('ambulances.delete');
    Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
    
    Route::get('/stations/list',[StationsController::class,'list'])->name('stations.list');
    
    
    Route::get('/registereddrivers',[RegisteredDriverController::class,'list'])->name('registereddrivers.list');
    Route::post('/registereddrivers/store',[RegisteredDriverController::class,'store'])->name('registereddrivers.store');
    
    // Route::get('/registeredusers',[RegisteredUserController::class,'list'])->name('registeredusers.list');
    // Route::post('/registeredusers/store',[RegisteredUserController::class,'store'])->name('registeredusers.store');
    Route::get('/users',[BackendUser::class,'list'])->name('users.list');
    Route::post('/users/store',[BackendUser::class,'store'])->name('users.store');
    
    Route::get('/requests/manage',[RequestsController::class,'manage'])->name('requests.manage');
    
    Route::get('/updateinfo/update',[UpdateInfoController::class,'update'])->name('updateinfo.update');


    Route::get('/patients',[BackendUser::class,'patientlist'])->name('patient.list');

 });




