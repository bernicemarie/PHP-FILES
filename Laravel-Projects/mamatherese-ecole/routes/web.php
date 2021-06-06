<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Use App\Http\Controllers\Backend\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
//logout route
Route::get('admin/logout',[AdminController::class,'Logout'])->name('admin.logout');
//End logout route
//user routes
Route::prefix('utilisateurs')->group(function(){
    Route::get('/liste',[UserController::class,'UserView'])->name('user.view');
    Route::get('/ajout',[UserController::class,'UserAdd'])->name('user.add');
    Route::post('/ajouter',[UserController::class,'UserStore'])->name('user.store');
    Route::get('/edition/{id}',[UserController::class,'UserEdit'])->name('user.edit');
    Route::post('/modification/{id}',[UserController::class,'UserUpdate'])->name('user.update');
    Route::get('/suppression/{id}',[UserController::class,'UserDelete'])->name('user.delete');
});
//End user routes