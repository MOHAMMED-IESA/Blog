<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
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

Route::get('/', function () {
    return view('index');
});


Route::get('/signup',[Controller::class,'SignupView'])->name('signup');
Route::post('/signup',[Controller::class,'SaveSignupData'])->name('SaveSignupData');


Route::get('/login',[Controller::class,'LoginView'])->name('login');
Route::post('/login',[Controller::class,'SaveLoginData'])->name('SaveLoginData');


Route::get('/forgetPass',[Controller::class,'forgetPassView'])->name('forgetPassView');
Route::post('/forgetPass',[Controller::class,'forgetPassUpdate'])->name('forgetPassUpdate');

Route::get('/logout',[Controller::class,'logout'])->name('logout');



//  ============== Admin  =============

Route::controller(AdminController::class)->group(function(){
    Route::get('add_post','add_post_view')->name('add_post_view');
    Route::post('add_post','save_post')->name('save_post');

    Route::get('all_posts','get_all_post')->name('get_all_post');
    Route::get('test','test')->name('test');
    

});