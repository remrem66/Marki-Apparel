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


Route::get('/addnewadminuser', function () {
    return view('admin.addNewAdminUser');
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
Route::get('/about', function () {
    return view('mainpage/about');
});


Route::get('/viewproducts', [Controller::class, 'viewproducts']);
Route::get('/addnewproduct', [Controller::class, 'addnewproduct']);
Route::get('/viewadminusers', [Controller::class, 'viewadminusers']);
Route::get('/editproduct/{id}', [Controller::class, 'editproduct']);
Route::get('/editadminuser/{id}', [Controller::class, 'editadminuser']);
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
Route::get('/customerprofileedit/{id}', [Controller::class, 'customerprofileedit']);
Route::get('/orders', [Controller::class, 'orders'])->name('orders');
Route::get('/userprofile', [Controller::class, 'userprofile']);
Route::get('/audittrail', [Controller::class, 'audittrail']);
Route::get('/showusers', [Controller::class, 'showusers']);
Route::get('/generatemonthlysalesreport', [Controller::class, 'generatemonthlysalesreport']);
Route::get('/generatesalesforecasting', [Controller::class, 'generatesalesforecasting']);
Route::get('/orderscancelled', [Controller::class, 'orderscancelled']);
Route::get('/cancelledorders', [Controller::class, 'cancelledorders']);
Route::get('/adminaccountedit', [Controller::class, 'adminaccountedit']);
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/viewlowstock', [Controller::class, 'viewlowstock']);




Route::post('/registeruser', [Controller::class, 'registerUser']);
Route::post('/insertnewproduct', [Controller::class, 'insertnewproduct']);
Route::post('/insertnewadminuser', [Controller::class, 'insertnewadminuser']);
Route::post('/addproductvariation', [Controller::class, 'addproductvariation']);
Route::post('/productedit', [Controller::class, 'productedit']);
Route::post('/adminuseredit', [Controller::class, 'adminuseredit']);
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
Route::post('/changeuserstatus', [Controller::class, 'changeuserstatus']);
Route::post('/editcustomerprofile', [Controller::class, 'editcustomerprofile']);
Route::post('/postareview', [Controller::class, 'postareview']);
Route::post('/monthsalesreport', [Controller::class, 'monthsalesreport']);
Route::post('/cancelitemorder', [Controller::class, 'cancelitemorder']);
Route::post('/changeproductstatus', [Controller::class, 'changeproductstatus']);
Route::post('/salesforecasting', [Controller::class, 'salesforecasting']);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
