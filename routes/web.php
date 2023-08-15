<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ArchitectureController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SanitaryController;
use App\Http\Controllers\InteriorProductController;
use App\Http\Controllers\InteriorDesigningController;


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
    return view('landing');
});
Route::get('helo', function () {
    return view('helo');

});
Route::get('projectgallery', function () {
    return view('projectgallery');

});


Route::get('dashboard', function () {
    return view('dashboard');
});
// Route::get('/editbooking', function () {
//     return view('editbooking');
// });
// Route::get('/contactus', function () {
//     return view('contactus');
// });
Route::get('architectureupload', function () {
    return view('architectureupload');
})->middleware('auth');
Route::get('interiordesigningupload', function () {
    return view('interiordesigningupload');
})->middleware('auth');
Route::get('interiorproductupload', function () {
    return view('interiorproductupload');
})->middleware('auth');
Route::get('sanitaryupload', function () {
    return view('sanitaryupload');
})->middleware('auth');
Route::get('editbooking', function () {
    return view('editbooking');
})->middleware('auth');
// Route::get('architectu
// Route::get('architectureupload', function () {
//     return view('architectureupload');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::group(['middleware'=>"web"],function(){
    Route::post('/landing/store',[UserController::class,'store'])->name('landing.store');
    Route::get('/contactus', [App\Http\Controllers\UserController::class, 'contact'])->middleware('auth');
   
    Route::post('/servicesupload/upload',[ServiceController::class,'upload'])->name('servicesupload')->middleware('auth');
    Route::post('/architectureupload/upload',[ArchitectureController::class,'uploadArchitecture'])->name('architectureupload')->middleware('auth');
    Route::post('/interiordesigningupload/upload',[InteriorDesigningController::class,'uploadInteriorDesigning'])->name('interiordesigningupload')->middleware('auth');
    Route::post('/interiorproductupload/upload',[InteriorProductController::class,'uploadInteriorProduct'])->name('interiorproductupload')->middleware('auth');
    Route::post('/sanitaryupload/upload',[SanitaryController::class,'uploadSanitary'])->name('sanitaryupload')->middleware('auth');
    
   Route::get('/removecontact/{id}',[UserController::class,'contactdelete'])->name('remove');
 
    Route::post('/bookingform', [BookingController::class, 'booking'])->name('booking');
    Route::get('/booking', [BookingController::class, 'getBooking'])->middleware('auth');
    Route::get('/deletebooking/{id}',[BookingController::class,'deleteBooking'])->name('remove');
    Route::get('editbooking/{id}', [BookingController::class, 'edit'])->name('edit');
    Route::put('/updatebooking/{id}', [BookingController::class, 'updateBooking'])->name('update');
    Route::get('/architecture/', [ArchitectureController::class, 'getArchitecture'])->name('image');
    Route::get('/interiordesigning/', [InteriorDesigningController::class, 'getThumbnail'])->name('image');
    Route::get('/sanitary/', [SanitaryController::class, 'getSanitary'])->name('image');
    Route::get('/projectgallery/{id}', [InteriorDesigningController::class, 'getInteriorDesigning'])->name('image');
  
    



}); 