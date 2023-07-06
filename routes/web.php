<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/about-grs', [App\Http\Controllers\FrontController::class, 'about_grs'])->name('about-grs');
Route::get('/about-partner',[App\Http\Controllers\FrontController::class, 'about_partner'])->name('about-partner');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contactPage'])->name('contact');
Route::get('/project',[App\Http\Controllers\FrontController::class,'projectPage'])->name('project');
Route::get('/project-detail',[App\Http\Controllers\FrontController::class,'projectDetailPage'])->name('project-detail');
Route::get('/news',[App\Http\Controllers\FrontController::class,'newsPage'])->name('news');
Route::get('/nopermission', function(){ return back(); })->name('nopermission');
Auth::routes();
Route::post('/subscribe/submit',[App\Http\Controllers\subscribeController::class, 'store'])->name('subscribe.submit');

//route for admin
Route::group(['middleware' => ['auth','roles'], 'roles' => ['admin']], function(){
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');
Route::resource('projects',App\Http\Controllers\projectController::class);
Route::resource('backend-news', App\Http\Controllers\newsController::class);
});