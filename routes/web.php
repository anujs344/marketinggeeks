<?php

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

Route::get('main-admin',function(){
    return view('main-admin.login');
});

Route::get('dashboard',function(){
    return view('main-admin.dashboard.dashboard');
})->name('dashboard');


Route::get('customers',function(){
    return view('main-admin.dashboard.customers');
})->name('customers');

Route::get('kitty',function(){
    return view('main-admin.dashboard.kitty');
})->name('kitty');

Route::get('allotkitty',function(){
    return view('main-admin.dashboard.allotkitty');

})->name('allotkitty');

Route::get('payment',function(){
    return view('main-admin.dashboard.payment');

})->name('payment');

Route::get('pending_payment',function(){
    return view('main-admin.dashboard.pending_payment');

})->name('pending_payment');

Route::get('pending_installments',function(){
    return view('main-admin.dashboard.pending_installments');

})->name('pending_installments');

Route::get('inventory',function(){
    return view('main-admin.dashboard.inventory');

})->name('inventory');

Route::get('products',function(){

    return view('main-admin.dashboard.products');
})->name('products');


Route::get('category',function(){

    return view('main-admin.dashboard.category');
})->name('category');

Route::get('update_password',function(){

    return view('main-admin.dashboard.update-password');
})->name('update_password');

Route::get('reward',function(){

    return view('main-admin.dashboard.reward');
})->name('reward');