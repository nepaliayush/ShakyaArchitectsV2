<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ArchitectureController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SanitaryController;
use App\Http\Controllers\InteriorProductController;
use App\Http\Controllers\InteriorDesigningController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CombinedDataController;
use App\Http\Controllers\TeamController;
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
//     return view('landing');
// });
// Route::get('/homee', function () {
//     return view('homee');
// });
// Route::get('/', function () {
//     return view('homee');
// });


Route::get('projectgallery', function () {
    return view('projectgallery');

});


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');;

Route::get('upload', function () {
    return view('upload');
})->middleware('auth');
Route::get('addteam', function () {
    return view('addteam');
});
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

Auth::routes();






Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::group(['middleware'=>"web"],function(){
    Route::post('/landing/store',[UserController::class,'store'])->name('landing.store');
    Route::get('/contactus', [App\Http\Controllers\UserController::class, 'contact'])->middleware('auth');
   
    Route::post('/servicesupload/upload',[ServiceController::class,'upload'])->name('servicesupload')->middleware('auth');
    Route::post('/architectureupload/upload',[ServiceController::class,'upload'])->name('architectureupload')->middleware('auth');
    Route::post('/interiordesigningupload/upload',[ServiceController::class,'upload'])->name('interiordesigningupload')->middleware('auth');
    Route::post('/interiorproductupload/upload',[InteriorProductController::class,'uploadInteriorProduct'])->name('interiorproductupload')->middleware('auth');
    Route::post('/sanitaryupload/upload',[SanitaryController::class,'uploadSanitary'])->name('sanitaryupload')->middleware('auth');
    Route::post('/upload/upload',[ServiceController::class,'upload'])->name('upload')->middleware('auth');
   Route::get('/removecontact/{id}',[UserController::class,'contactdelete'])->name('remove');
 
    Route::post('/bookingform', [BookingController::class, 'booking'])->name('booking');
    Route::get('/booking', [BookingController::class, 'getBooking'])->middleware('auth');
    Route::get('/deletebooking/{id}',[BookingController::class,'deleteBooking'])->name('remove');
    Route::get('editbooking/{id}', [BookingController::class, 'edit'])->name('edit');
    Route::put('/updatebooking/{id}', [BookingController::class, 'updateBooking'])->name('update');

    Route::get('/architecture/', [ServiceController::class, 'getArchitectureThumbnail'])->name('image');
    Route::get('/interiordesigning/', [ServiceController::class, 'getInteriorThumbnail'])->name('image'); 
    Route::get('/sanitary/', [SanitaryController::class, 'getSanitary'])->name('image');

   Route::get('/projectgallery/interiordesigning/{id}', [ServiceController::class, 'getInteriorDesigning'])->name('interiorimage');
 Route::get('/projectgallery/architecture/{id}', [ServiceController::class, 'getArchitecture'])->name('architectureimage');



// Route::get('/homee', [YoutubeController::class, 'fetchVideos']);
//  Route::get('/homee', [InteriorDesigningController::class, 'getprojects'])->name('image');
//  Route::get('/homee', [ArchitectureController::class, 'getaprojects'])->name('image');
Route::get('/', [CombinedDataController::class, 'showCombinedData'])->name('homee');

Route::get('homeee', [CombinedDataController::class, 'showCombinedData'])->name('homee');

Route::post('/uploadteam/upload',[TeamController::class,'addTeam'])->name('upload')->middleware('auth');
}); 