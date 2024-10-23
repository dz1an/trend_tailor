<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
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
    // homepage 
// Route::get('/', function () {
//     return view('landing');
// });
Route::get('/homepage-sigin',[HomepageController::class,'SigInPage'])->name('Homepage.signin');
Route::get('/',[HomepageController::class,'Homepage'])->name('Homepage.landingpage');

// client page
Route::get('/client-myaccount',[ClientController::class,'Myaccount'])->name('Client.Templates.my_account');
Route::get('/client-Address',[ClientController::class,'Address'])->name('Client.Templates.adress');
Route::get('/client-bag',[ClientController::class,'Bag'])->name('Client.Templates.bag');
Route::get('/client-cost',[ClientController::class,'cost'])->name('Client.Templates.cost');
Route::get('/client-customization',[ClientController::class,'customization'])->name('Client.Templates.customization');
Route::get('/client-order-placement',[ClientController::class,'Orderplacement'])->name('Client.Templates.order_placement');
Route::get('/client-preview',[ClientController::class,'preview'])->name('Client.Templates.preview');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
