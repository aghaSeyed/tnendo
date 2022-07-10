<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});
Route::group(['middleware'=>['auth' ,'panel']] ,function (){
    Route::resource('user' , 'Auth/UserController');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware('auth')->name('dashboard');
    Route::get('/dashboard/submit/{id}', 'store')->middleware('auth')->name('dashboard.submit');
    Route::get('/dashboard/done', 'doneAndo')->middleware('auth')->name('dashboard.doneAndo');
    Route::get('/dashboard/submited/{id}', 'submitFirstForm')->middleware('auth')->name('dashboard.submitFirstForm');
    Route::get('/dashboard/submited2/{id}', 'submitSecondForm')->middleware('auth')->name('dashboard.submitSecondForm');
    Route::get('/dashboard/showForm', 'show')->middleware('auth')->name('dashboard.show');
  

    
   
});


require __DIR__.'/auth.php';
