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
    return view('welcome');
});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/user', [App\Http\Controllers\UserInforController::class, 'index']);
    Route::get('/add_building', [App\Http\Controllers\BuildingController::class, 'addBuilding']);
    Route::get('/table_building', [App\Http\Controllers\BuildingController::class, 'tableBuilding']);
    Route::get('/logout',[App\Http\Controllers\UserController::class, 'logOut']);
    Route::post('/add_building', [App\Http\Controllers\BuildingController::class, 'store']);
    Route::post('setUserImage',[App\Http\Controllers\UserController::class, 'setUserImage']);
    Route::get('form/editprofile',[App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->middleware('password.confirm');
    Route::post('changePassword',[App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
});
