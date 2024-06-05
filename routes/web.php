<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::get('/aboutUs', function () {
    return view('aboutUs', ['title' => 'About Us',
                            'active' => 4,
                            'role' => 'guess']
                );
});


Route::get('/login', function () {
    return view('login', ['title' => 'Login',
                          'active' => 4,
                          'role' => 'guess']
                );
});

// Route::post('/login', [loginController::class, 'verifUser']);


Route::post('/login', function(){
    dd($request);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register',
                          'active' => 4,
                          'role' => 'guess']
                );
});

Route::get('/', function () {

    return view('home', ['title' => 'Home',
                          'role' => 'admin']    
                );
});
// Route::get('/login', [loginController::class, 'login']);

Route::get('/product', function () {
    return view('product', ['title' => 'Product',
                            'role' => 'admin',
                            'deskripsi' => 'ini adalah pulpen']    
                );
});

Route::get('/addProduct', function () {
    return view('addProduct', ['title' => 'Add Product',
                               'role' => 'admin']    
                );
});

Route::get('/myCart', function () {
    return view('myCart', ['title' => 'Add Product',
                           'role' => 'admin',
                           'cart' => 1]    
                );
});

Route::get('/transaction', function () {
    return view('transaction', ['title' => 'View Transaction',
                           'role' => 'admin',
                           'cart' => 1]    
                );
});

Route::get('/viewAcc', function () {
    return view('viewAcc', ['title' => 'View Account',
                           'role' => 'admin',
                           'cart' => 1]    
                );
});

Route::get('/test', [loginController::class, 'index']);