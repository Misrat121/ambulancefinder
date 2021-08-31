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
use App\Http\Controllers\Frontend\UserController;

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

Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');




//admin panel routes

Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/',[HomeController::class,'home']);

    Route::get('/ambulances',[AmbulanceController::class,'list'])->name('ambulances.list');
    Route::post('/ambulances/store',[AmbulanceController::class,'store'])->name('ambulances.store');
    
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




