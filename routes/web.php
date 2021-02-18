<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BuildingController;

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

    ///building
    Route::get('/building/list',[App\Http\Controllers\BuildingController::class,'showBuildingList'])->name('building.list');
    Route::resource('/building',App\Http\Controllers\BuildingController::class);
    Route::resource('/constarution',App\Http\Controllers\ConstarutionController::class);
    Route::resource('/usermanament',App\Http\Controllers\UserManagementController::class,);

    ///progress
    Route::resource('/progress',App\Http\Controllers\ProgressController::class);

    Route::post('/setUserNameAndEmail',[App\Http\Controllers\UserController::class, 'setUserNameAndEmail'])->name('users.update');
    Route::post('/setUserImage',[App\Http\Controllers\UserController::class, 'setUserImage']);
    Route::get('/form/editprofile',[App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->name('users.edit');
    Route::post('/changePassword',[App\Http\Controllers\UserController::class, 'changePassword'])->name('users.password.update');
    Route::get('/logout',[App\Http\Controllers\UserController::class, 'logOut']);

});
