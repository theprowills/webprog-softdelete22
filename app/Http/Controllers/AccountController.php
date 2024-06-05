<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    //
    // function index(Request $request){
    //     switch($request->submitbutton) {

    //         case 'delete': 
    //             //action save here and close
    //         break;
        
    //         case 'update': 
    //             return view('updateAcc', ['title' => 'View Account',
    //                     'role' => 'admin',
    //                     'cart' => 1]
    //             );
    //         break;
    //     }
    // };
    // function delete(){
    //     return view('viewAcc');
    // }

    // function update(){
        
    // }

    // function viewAddUser(){
    //     // return suatu view
    //     $users = DB::table('users')->where('id', '=', 1)->get();
    //     return view('add-user', [
    //         'users' => $users
    //     ]);
    // }

    function addUser(Request $request){
        dd($request);
        DB::table('users')->insert([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
            'role'      => $request->role
        ]);
        return redirect('/users');
    }

    function updateUser(Request $request, $id){
        // dd($request);
        DB::table('users')->where('id', '=', $id)->update(array(
            'username'  => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
            'role'      => $request->role
            ));

        return view('viewAcc', ['title' => 'View Account',
                                'role' => 'admin',
                                'cart' => 1,
                                'users' => User::all(),
                                'message' => 'Updated Successfully']
        ); 
        // return view('viewAcc', ['title' => 'View Account',
        //                         'role' => 'admin',
        //                         'cart' => 1,
        //                         'users' => User::all(),
        //                         'message' => 'Updated Successfully']);
    }
    

    function destroyUser(Request $request) {
        // dd($request);
        DB::table('users')->delete($request->id);
        return view('viewAcc', ['title' => 'View Account',
                                'role' => 'admin',
                                'cart' => 1,
                                'users' => User::all(),
                                'message' => 'Delete Successfully']
        ); 
    }
}
