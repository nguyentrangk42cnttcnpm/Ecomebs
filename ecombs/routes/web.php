<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderDetailController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as WebProductController;

/**
 * Phần admin
 *
 */

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('orders', OrderController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('orderdetails', OrderDetailController::class);
});

/**
 * Phần
 */
Route::get('language', function(Request $request){
   session( ['locale' => $request->input('locale') ]);
   return redirect()->route('customers.index');
});

Route::get('language', function(Request $request){
    session(['locale' => $request->input('locale')]);
    return redirect()->route('brands.index');
});

Route::get('vi', function(){
    App::setLocale('vi');
});

Route::get('language', function(Request $request){
    session( ['locale' => $request->input('locale') ]);
    return redirect()->route('categories.index');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('product-detail/{id}', [WebProductController::class, 'show'])->name('products.show');


