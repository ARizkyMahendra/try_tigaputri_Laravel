<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomwebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\UserCostumerController;
use App\Http\Controllers\UserProfileController;
use App\Models\customweb;
use Illuminate\Auth\Events\Verified;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/package', [HomeController::class, 'package'])->name('package');


Route::middleware(['auth','usertype:admin'])->group(function () {
    // Route::get('/admin/dashboard', [Controller::class, 'index'])->name('dashboard');
    Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/admin/users/admin', [UserProfileController::class, 'usersAdmin'])->name('usersAdmin');
    Route::get('/admin/addModal', [UserProfileController::class, 'addModal'])->name('addModal');
    Route::post('/admin/addDataUser', [UserProfileController::class, 'storeUser'])->name('addData');
    Route::get('/admin/editModalUser/{id}', [UserProfileController::class, 'editUser'])->name('editModalUser');
    Route::put('/admin/UpdateModalUser/{id}', [UserProfileController::class, 'updateUser'])->name('updateDataUser');
    Route::delete('/admin/deleteDataUser/{id}', [UserProfileController::class, 'destroy'])->name('deleteData');
    
    Route::get('/admin/costumer', [UserCostumerController::class, 'usersCostumer'])->name('usersCostumer');
    Route::get('/admin/addModalCostumer', [UserCostumerController::class, 'addModalCostumer'])->name('addModalCostumer');
    Route::post('/admin/addDataCustomer', [UserCostumerController::class, 'storeController'])->name('addDataCustomer');
    Route::get('/admin/editModalCostumer/{id}', [UserCostumerController::class, 'editCustomer'])->name('editModalCustomer');
    Route::put('/admin/UpdateModalCostumer/{id}', [UserCostumerController::class, 'updateCostumer'])->name('updateDataCostumer');
    Route::delete('/admin/deleteDataCostumer/{id}', [UserCostumerController::class, 'destroy'])->name('deleteDataCustomer');

    Route::get('/admin/custonWeb/menu', [CustomwebController::class, 'indexMenu'])->name('customMenu');
    Route::get('/admin/custonWeb/addMenu', [CustomwebController::class, 'addMenu'])->name('addcustomMenu');
    Route::post('/admin/custonWeb/addDataMenu', [CustomwebController::class, 'storeMenu'])->name('addDatacustomMenu');
    Route::get('/admin/custonWeb/editDataMenu/{id}', [CustomwebController::class, 'editMenu'])->name('editDatacustomMenu');
    Route::put('/admin/custonWeb/updateDataMenu/{id}', [CustomwebController::class, 'updateMenu'])->name('updateDatacustomMenu');
    Route::delete('/admin/custonWeb/deletetaMenu/{id}', [CustomwebController::class, 'destroyMenu'])->name('deletetacustomMenu');

    Route::get('/admin/custonWeb/contact', [CustomwebController::class, 'indexContact'])->name('customContact');
    Route::get('/admin/custonWeb/addContact', [CustomwebController::class, 'addContact'])->name('addcustomContact');
    Route::post('/admin/custonWeb/addDataContact', [CustomwebController::class, 'storeContact'])->name('addDatacustomContact');
    Route::get('/admin/custonWeb/editDataContact/{id}', [CustomwebController::class, 'editContact'])->name('editDatacustomContact');
    Route::put('/admin/custonWeb/updateDataContact/{id}', [CustomwebController::class, 'updateContact'])->name('updateDatacustomContact');
    Route::delete('/admin/custonWeb/deleteDataContact/{id}', [CustomwebController::class, 'destroyContact'])->name('deleteDatacustomContact');
    
    Route::get('/admin/custonWeb/addAlamat', [CustomwebController::class, 'addAddress'])->name('addcustomAddress');
    Route::post('/admin/custonWeb/addDataAlamat', [CustomwebController::class, 'storeAlamat'])->name('addDatacustomAlamat');
    Route::get('/admin/custonWeb/editDataAlamat/{id}', [CustomwebController::class, 'editAlamat'])->name('editDatacustomAlamat');
    Route::put('/admin/custonWeb/updateDataAlamat/{id}', [CustomwebController::class, 'updateAlamat'])->name('updateDatacustomAlamat');
    Route::delete('/admin/custonWeb/deleteDataAlamat/{id}', [CustomwebController::class, 'destroyAlamat'])->name('deleteDatacustomAlamat');
    
});

require __DIR__.'/auth.php';