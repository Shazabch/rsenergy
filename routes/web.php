<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\expense_categoryController;
use App\Http\Controllers\expenseController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\product_categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\projectInventoryController;
use App\Http\Controllers\projectPaymentController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\vendorController;
use App\Models\employee;
use App\Models\product;
use App\Models\product_category;
use App\Models\vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routes for the expense controller
Route::middleware('auth')->group(function () {
    Route::get('/expense/add',[expenseController::class,'index'])->name('expense.add');
    Route::get('/expense/show',[expenseController::class,'create'])->name('expense.show');
    Route::post('/expense/store',[expenseController::class,'store'])->name('expense.store');
});


//Routes for the category table
Route::middleware('auth')->group(function(){
    Route::get('/category/addnshow',[expense_categoryController::class,'index'])->name('category.addnshow');
    Route::post('/category/store',[expense_categoryController::class,'store'])->name('category.store');
    Route::delete('/expense_category/destroy/{id}',[expense_categoryController::class,'destroy'])->name('expense_category.destroy');
});

//Routes for the employee table
Route::middleware('auth')->group(function(){
    Route::get('/employee/add',[employeeController::class,'index'])->name('employee.add');
    Route::get('/employee/show',[employeeController::class,'create'])->name('employee.show');
    Route::post('/employee/store',[employeeController::class,'store'])->name('employee.store');
});

//Routes for the product Table
Route::middleware('auth')->group(function(){
    Route::get('/product/add',[productController::class,'index'])->name('product.add');
    Route::get('/product/show',[productController::class,'create'])->name('product.show');
    Route::post('/product/store',[productController::class,'store'])->name('product.store');
});


//Routes for the product category table
Route::middleware('auth')->group(function(){
    Route::get('/pcategory/addnshow',[product_categoryController::class,'index'])->name('pcategory.addnshow');
    Route::post('/pcategory/store',[product_categoryController::class,'store'])->name('pcategory.store');
    Route::delete('/pcategory/destroy/{id}',[product_categoryController::class,'destroy'])->name('pcategory.destroy');
});


//Routes For the purchases Table
Route::middleware('auth')->group(function(){
    Route::get('/purchase/add',[purchaseController::class,'index'])->name('purchase.add');
    Route::get('/purchase/show',[purchaseController::class,'create'])->name('purchase.show');
    Route::post('/purchase/store',[purchaseController::class,'store'])->name('purchase.store');
});


//Routes For the Vendors Table
Route::middleware('auth')->group(function(){
    Route::get('vendors/add',[vendorController::class,'index'])->name('vendors.add');
    Route::get('vendors/show',[vendorController::class,'create'])->name('vendors.show');
    Route::post('vendors/store',[vendorController::class,'store'])->name('vendors.store');
});


//Routes For The Customer Table
Route::middleware('auth')->group(function(){
    Route::get('/customer/add',[customerController::class,'index'])->name('customer.add');
    Route::get('/customer/show',[customerController::class,'create'])->name('customer.show');
    Route::post('/customer/store',[customerController::class,'store'])->name('customer.store');
    Route::delete('/customer/destroy/{id}',[customerController::class,'destroy'])->name('customer.destroy');
});


//Routes For the ownerTable
Route::middleware('auth')->group(function(){
    Route::get('/owner/addnshow',[ownerController::class,'index'])->name('owner.addnshow');
    Route::post('/owner/store',[ownerController::class,'store'])->name('owner.store');
    Route::delete('/owner/destroy/{id}',[ownerController::class,'destroy'])->name('owner.destroy');
});


//Routes for the project table
Route::middleware('auth')->group(function(){
    Route::get('/project/add',[projectController::class,'index'])->name('project.add');
    Route::get('/project/show',[projectController::class,'create'])->name('project.show');
    Route::post('project/store',[projectController::class,'store'])->name('project.store');
});


//Routes For the Project Inventory Controller
Route::middleware('auth')->group(function(){
    Route::get('pinventory/add/{id}',[projectInventoryController::class,'index'])->name('pinventory.add');
    Route::get('pinventory/show/{id}',[projectInventoryController::class,'create'])->name('pinventory.show');
    Route::post('pinventory/store/{id}',[projectInventoryController::class,'store'])->name('pinventory.store');
    Route::delete('pinventory/destroy/{id}',[projectInventoryController::class,'destroy'])->name('pinventory.destroy');
});


//Routes for the project Payments controller
Route::middleware('auth')->group(function(){
    Route::get('/projectpayment/add/{id}',[projectPaymentController::class,'index'])->name('projectpayment.add');
    Route::post('/projectpayment/store/{id}',[projectPaymentController::class,'store'])->name('projectpayment.store');
});

//Routes For the Payment Table
Route::middleware('auth')->group(function(){
    Route::get('/payment/add',[paymentController::class,'index'])->name('payment.add');
    Route::get('/payment/show',[paymentController::class,'create'])->name('payment.show');
    Route::post('/payment/store',[paymentController::class,'store'])->name('payment.store');
});


