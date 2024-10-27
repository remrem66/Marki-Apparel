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

// Route::get('/single-product', function () {
//     return view('mainpage/single-product');
// });
Route::get('/faqs', function () {
    return view('mainpage/faqs');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');


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

Route::get('/checkout', function () {
    return view('mainpage/checkout');
});


Route::get('/viewproducts', [Controller::class, 'viewproducts']);
Route::get('/editproduct/{id}', [Controller::class, 'editproduct']);
Route::get('/shop/{category}', [Controller::class, 'shopcategory']);
Route::get('/single-product/{name}', [Controller::class, 'singleproduct']);
Route::get('/logout', [Controller::class, 'logout']);
Route::get('/emailverification', [Controller::class, 'emailverification'])->name('emailVerification');
Route::get('/fullcartdetails', [Controller::class, 'fullcartdetails'])->name('fullcartdetails');
Route::get('/loginregister', [Controller::class, 'loginregister'])->name('loginregister');
Route::get('/checkoutdetails', [Controller::class, 'checkoutdetails'])->name('checkoutdetails');
Route::get('/successpayment', [Controller::class, 'successpayment'])->name('successpayment');
Route::get('/test', [Controller::class, 'test']);
Route::get('/orderstatus/{id}', [Controller::class, 'orderstatus']);
Route::get('/productdetails/{id}', [Controller::class, 'productdetails']);
Route::get('/orders', [Controller::class, 'orders'])->name('orders');



Route::post('/registeruser', [Controller::class, 'registerUser']);
Route::post('/insertnewproduct', [Controller::class, 'insertnewproduct']);
Route::post('/addproductvariation', [Controller::class, 'addproductvariation']);
Route::post('/productedit', [Controller::class, 'productedit']);
Route::post('/singleproductdetails', [Controller::class, 'singleproductdetails']);
Route::post('/userlogin', [Controller::class, 'userlogin']);
Route::post('/resendcode', [Controller::class, 'resendcode']);
Route::post('/verifyemail', [Controller::class, 'verifyemail']);
Route::post('/addtocart', [Controller::class, 'addtocart']);
Route::post('/editproductcart', [Controller::class, 'editproductcart']);
Route::post('/deletecartproduct', [Controller::class, 'deletecartproduct']);
Route::post('/getmunicipality', [Controller::class, 'getmunicipality']);
Route::post('/getbarangay', [Controller::class, 'getbarangay']);
Route::post('/placeorder', [Controller::class, 'placeorder']);
Route::post('/selectcourier', [Controller::class, 'selectcourier']);
Route::post('/changeorderstatus', [Controller::class, 'changeorderstatus']);


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
