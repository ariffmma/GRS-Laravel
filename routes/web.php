<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('lang/home',[LangController::class,'index']);
Route::get('lang/project',[LangController::class,'index']);
Route::get('lang/change',[LangController::class,'change'])->name('changeLang');
Route::get('/about-grs', [App\Http\Controllers\FrontController::class, 'about_grs'])->name('about-grs');
Route::get('/about-partner',[App\Http\Controllers\FrontController::class, 'about_partner'])->name('about-partner');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contactPage'])->name('contact');
Route::get('/project',[App\Http\Controllers\FrontController::class,'projectPage'])->name('project');
Route::get('/{category}={slug}',[App\Http\Controllers\FrontController::class,'projectDetailPage'])->name('project-detail');
Route::get('/project/category/{category}',[App\Http\Controllers\FrontController::class,'projectCategory'])->name('project-categori');
Route::get('/project/year/{year}',[App\Http\Controllers\FrontController::class,'projectYear'])->name('project-year');
Route::get('/news',[App\Http\Controllers\FrontController::class,'newsPage'])->name('news');
Route::get('/nopermission', function(){ return back(); })->name('nopermission');
Auth::routes();
Route::post('/subscribe/submit',[App\Http\Controllers\subscribeController::class, 'store'])->name('subscribe.submit');
Route::post('/contact/business',[App\Http\Controllers\contactController::class,'store'])->name('business.submit');
Route::post('/contact/firm',[App\Http\Controllers\contactController::class,'storeFirm'])->name('firm.submit');

// temp
Route::get('/list-project', [App\Http\Controllers\FrontController::class, 'listProject'])->name('list-project');
//route for admin
Route::group(['middleware' => ['auth','roles'], 'roles' => ['admin']], function(){
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');
Route::post('/projects/uploadfile', [App\Http\Controllers\projectController::class, 'uploadFile'])->name('projects.uploadFile');
Route::resource('projects',App\Http\Controllers\projectController::class);
Route::resource('backend-news', App\Http\Controllers\newsController::class);
Route::resource('subscriber', App\Http\Controllers\subscribeController::class);
Route::resource('contacts', App\Http\Controllers\contactController::class);
Route::resource('contacts-firm',App\Http\Controllers\contactFirmController::class);
Route::post('projects/uploadImage',[App\Http\Controllers\projectController::class,'upload'])->name('projects.uploadImage');

});