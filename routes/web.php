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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes(['register' => true]);

Route::middleware(['auth', 'role:superadministrator|administrator'])->group(function () {
    Route::get('/user_raw', [App\Http\Controllers\UserManagementController::class, 'userContent'])->name('users.list');
    Route::get('/user_role', [App\Http\Controllers\UserManagementController::class, 'userRolePermission'])->name('users.role-permission.list');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/project/list', [App\Http\Controllers\BuildingController::class, 'showBuildingList'])->name('building.list');
    Route::get('/progress/list', [App\Http\Controllers\ProgressController::class, 'showProgressList'])->name('Progress.list');
    Route::get('/report/ais', [App\Http\Controllers\BuildingController::class, 'showReportAisList'])->name('Progress.list');
    Route::get('/report/3bb', [App\Http\Controllers\BuildingController::class, 'showReport3BBList'])->name('Progress.list');
    Route::get('/report/true', [App\Http\Controllers\BuildingController::class, 'showReportTrueList'])->name('Progress.list');
    Route::get('/report/tot', [App\Http\Controllers\BuildingController::class, 'showReportTotList'])->name('Progress.list');
    Route::get('/report/finet', [App\Http\Controllers\BuildingController::class, 'showReportFinetList'])->name('Progress.list');
    Route::get('/constarution/list', [App\Http\Controllers\ConstarutionController::class, 'showConstarutionList'])->name('Constarution.list');
    Route::resource('/building', App\Http\Controllers\BuildingController::class);
    Route::resource('/building_unit', App\Http\Controllers\buildingunitController::class);
    Route::resource('/progress', App\Http\Controllers\ProgressController::class);
    Route::resource('/constarution', App\Http\Controllers\ConstarutionController::class);
    Route::resource('/usermanament', App\Http\Controllers\UserManagementController::class);
    Route::resource('/permission', App\Http\Controllers\UserRolePermissionController::class);
    Route::resource('/datavalidation', App\Http\Controllers\dataValidationController::class);
    ///calendar
    Route::resource('/calendar', App\Http\Controllers\CalendarController::class);
    ///constarution
    Route::resource('/constarution', App\Http\Controllers\ConstarutionController::class);
    ///resplice
    Route::resource('/resplice', App\Http\Controllers\RespliceController::class);
    ///payment
    Route::resource('/payment', App\Http\Controllers\PaymentController::class);
    ///planning
    Route::get('/planning/list', [App\Http\Controllers\PlaningController::class, 'showPlaningList'])->name('planning.list');
    Route::resource('/planning', App\Http\Controllers\PlaningController::class);
    Route::get('/building-autocomplete-ajax', [App\Http\Controllers\BuildingController::class, 'dataAjaxProjectName']);
    Route::get('/dataselect-autocomplete-ajax', [App\Http\Controllers\GetdataController::class, 'dataAjaxDataSelect']);
    Route::get('/dataselect-desingName', [App\Http\Controllers\GetdataController::class, 'desingName']);
    Route::get('/dataselect-contract', [App\Http\Controllers\GetdataController::class, 'contractName']);
    //get_province
    Route::post('/building/fetch', [App\Http\Controllers\BuildingController::class, 'fetch'])->name('building.fetch');
    //get_area
    Route::post('/building/fetch2', [App\Http\Controllers\BuildingController::class, 'fetch2'])->name('building.fetch2');


    //ฟิวช่วยทำ
    Route::post('/usermanament', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('Register.create');
    Route::post('/setUserNameAndEmail', [App\Http\Controllers\UserController::class, 'setUserNameAndEmail'])->name('users.update');
    Route::post('/setUserImage', [App\Http\Controllers\UserController::class, 'setUserImage']);
    Route::get('/form/editprofile', [App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->name('users.edit');
    Route::post('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('users.password.update');
    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logOut']);

});
