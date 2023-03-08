<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;



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

// Route::get('/', function () {
//     return view('index');
// });
//LOG OUT MAGIC

//LOG IN MAGIC
Route::get('/',[MainController::class,'index'])->name('index');


//DASHBOARD PAGES
Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
Route::get('/dashboard/projects',[DashboardController::class,'show'])->name('projects');


//PAGES
Route::get('/login',[MainController::class,'login'])->name('login');


//LOGIC
Route::post('/loginprocess',[MainController::class,'loginprocess'])->name('loginprocess');
Route::get('/loginprocess', function () {
    return redirect()->back();
});
Route::post('/logout',[MainController::class,'logout'])->name('logout');
Route::get('/logout', function () {
    return redirect()->back();
});



Route::middleware('auth:sanctum')->group(function() {

});

