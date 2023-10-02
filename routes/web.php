<?php

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


Route::get('/', function () {
    return view('home');
});

// Route::get('logedin', function () {
//     return view('loginhome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/shoplogin', function () {
    return view('shoplogin');
});


Route::get('/wheels', function () {
    return view('wheels');
});

//ShopKeeper function --------------------------------------------------------------------------------------------------

Route::post('/loginshop',[\App\Http\Controllers\ShopKeeperController::class,'loginUser'])->name('login1');
Route::get('/shopdashboard', [\App\Http\Controllers\ShopKeeperController::class, 'dashboard']);
Route::get('/shopeup',[\App\Http\Controllers\ShopKeeperController::class,'index']);
Route::post('/indexshop',[\App\Http\Controllers\ShopKeeperController::class,'storedata']);
Route::get('/editshop/{id}',[\App\Http\Controllers\ShopKeeperController::class,'edit']);
Route::put('/update/{id}',[\App\Http\Controllers\ShopKeeperController::class,'update']);
Route::get('/view1',[\App\Http\Controllers\ShopKeeperController::class,'view1']);
Route::get('/delshop/{id}',[\App\Http\Controllers\ShopKeeperController::class,'del']);
Route::get('/logout',[\App\Http\Controllers\ShopKeeperController::class,'logout']);

//USER FUNCTION-------------------------------------------------------------------------------------------------------

Route::get('/signup',[\App\Http\Controllers\SignUpcontroller::class,'index']);
Route::post('/index',[\App\Http\Controllers\SignUpcontroller::class,'store'])->name('store');
Route::get('/view',[\App\Http\Controllers\signUpController::class,'view']);
Route::get('/mycomp', [\App\Http\Controllers\SignUpController::class, 'mycomp'])->name('mycomp');
Route::post('/login',[\App\Http\Controllers\SignUpController::class,'loginUser'])->name('login');
Route::get('/edit/{id}',[\App\Http\Controllers\SignUpController::class,'edit']);
Route::put('/update/{id}',[\App\Http\Controllers\SignUpController::class,'update']);
Route::get('/delrec/{id}',[\App\Http\Controllers\SignUpController::class,'del']);
Route::get('/dashboard', [\App\Http\Controllers\SignUpController::class, 'dashboard']);
Route::get('/logout1',[\App\Http\Controllers\SignUpController::class,'logout']);

Route::get('/myprofile/{id}',[\App\Http\Controllers\SignUpController::class,'myprofile']);
Route::get('/proedit/{id}',[\App\Http\Controllers\SignUpcontroller::class,'proedit']);
Route::post('/proupdate/{id}',[\App\Http\Controllers\SignUpcontroller::class,'proupdate']);

//IMG FUNCTION------------------------------------------------------------------------------------------------------------

Route::post('/wheels',[\App\Http\Controllers\WheelsUploadController::class,'store']);
Route::get('/imgview',[\App\Http\Controllers\WheelsUploadController::class,'show']);

//COMPLAINS FUNCTION----------------------------------------------------------------------------------------------------

Route::get('/complaints',[\App\Http\Controllers\ComplaintsController::class,'index']);
Route::post('/add_complaints',[\App\Http\Controllers\ComplaintsController::class,'storecomplaints'])->name('add_complaints');
Route::get('/viewcomplaints',[\App\Http\Controllers\ComplaintsController::class,'comview']);

// MAIL FUNCTION--------------------------------------------------------------------------------------------------------

Route::post('updateid',[\App\Http\Controllers\MailController::class,'updateids'])->name('updateid');
Route::get('/mail',[\App\Http\Controllers\MailController::class,'index']);;

//ADMIN FUNCTION--------------------------------------------------------------------------------------------------------

Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);
Route::get('/adminlogin',[\App\Http\Controllers\AdminController::class,'loginform']);
Route::post('/adminlog',[\App\Http\Controllers\AdminController::class,'loginuser']);
// Route::get('/logout2',[\App\Http\Controllers\AdminController::class,'logout']);

//ADMIN SIDE ComplaintsController FUNCTION-----------------------------------------------------------------------------

Route::get('/mastercom',[\App\Http\Controllers\MasterComController::class,'index']);
Route::post('/store1',[\App\Http\Controllers\MasterComController::class,'store1'])->name('store1');

































