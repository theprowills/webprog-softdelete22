<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AccountController;
use App\Models\User;
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

Route::get('/account', function () {
    return view('viewAcc', ['title' => 'View Account',
                           'role' => 'admin',
                           'cart' => 1,
                           'users' => User::all(),
                           'message' => '']    
                );
});

// Route::post('/accountUpdate/{id}', function ($id) {
//     return view('updateAcc', ['title' => 'View Account',
//                            'role' => 'admin',
//                            'cart' => 1]    
//                 );
// });
// Route::post('/accountDelete/{id}', [function ($id) {
//     return view('updateAcc', ['title' => 'View Account',
//                            'role' => 'admin',
//                            'cart' => 1]    
//                 );
// }]);

Route::post('/accountDelete/{id}', [AccountController::class, 'destroyUser']);

Route::get('/accountUpdate/{id}', function ($id){
    // dd(DB::table('users')->where('id', '=', $id)->get()[0]);
    return view('updateAcc', ['title' => 'View Account',
                              'role' => 'admin',
                              'cart' => 1,
                              'user' => DB::table('users')->where('id', '=', $id)->get()[0],
                              'link' => '']);
});

Route::post('/accountUpdate/{id}', [AccountController::class, 'updateUser']);

// Route::post('/accountDelete/{id}', function($id){
//     // dd($request);
//     return view('viewAcc', ['title' => 'View Account',
//                             'role' => 'admin',
//                             'cart' => 1,
//                             // 'users' => User::all(),
//                             'listing' => User::find($id)
//     ]);
//     // (Request $request) {
//     //     DB::table('users')->delete($request->id);
//     //     return view('viewAcc', ['title' => 'View Account',
//     //                 'role' => 'admin',
//     //                 'cart' => 1,
//     //                 'users' => User::all(),
//     //                 'link' => '']    
//     //             );
//     // }
// });
// Route::post('/accountDelete', [AccountController::class, 'destroyUser']);

// Route::get('/account/update', function () {
//     return view('updateAcc', ['title' => 'Update Account',
//                            'role' => 'admin',
//                            'cart' => 1]
//                 );
// });

Route::get('/test', [loginController::class, 'index']);