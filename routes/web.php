<?php

use App\Http\Controllers\Controller;
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
Route::get('/', function () {
    return view('mainpage/index');
});
Route::get('shop', function () {
    return view('mainpage/shop');
});
Route::get('/single-product', function () {
    return view('mainpage/single-product');
});
Route::get('/account', function () {
    return view('mainpage/LoginRegister');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});


Route::get('/datatable', function () {
    return view('admin/dataTable');
});

Route::get('/basictable', function () {
    return view('admin/basicTable');
});
Route::get('/formadvance', function () {
    return view('admin/formAdvance');
});
Route::get('/formelements', function () {
    return view('admin/formElements');
});
Route::get('/formvalidation', function () {
    return view('admin/formValidation');
});
Route::get('/formwizard', function () {
    return view('admin/formWizard');
});
Route::get('/formfileupload', function () {
    return view('admin/formFileUpload');
});
Route::get('/editors', function () {
    return view('admin/formEditors');
});

Route::get('/addnewproduct', function () {
    return view('admin.addNewProduct');
});

Route::get('/chartjs', function () {
    return view('admin/chartjs');
});

Route::get('/chartbrite', function () {
    return view('admin/chartBrite');
});
Route::get('/chartsparkline', function () {
    return view('admin/chartSparkline');
});
Route::get('/order', function () {
    return view('admin/orderList');
});
Route::get('/viewproduct', function () {
    return view('admin.viewProduct');
});

Route::post('/registeruser', [Controller::class, 'registerUser']);
Route::post('/insertnewproduct', [Controller::class, 'insertnewproduct']);


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
