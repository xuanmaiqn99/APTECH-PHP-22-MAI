<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function hienThiNguoiDung(){
        $users = DB::table('users')->get();
        return view('users',[
            'users' => $users
        ]);
    }
    function show($id){
        $user = DB::table('users')->where('id',$id)->first();
        return view('show', [
            'user' => $user
        ]);
    }
}
