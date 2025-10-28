<?php

use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\ProfileController;
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

Route::prefix('front')->name('front.')->group(function(){
        Route::get('/', FrontHomeController::class)->middleware('auth')->name('index');
        
Route::view('/login','front.auth.login');
                Route::view('/register','front.auth.register');
                                Route::view('/forget-password','front.auth.forget-password');


});


require __DIR__.'/auth.php';
Route::get('/',function() {
    return view('welcome');
});