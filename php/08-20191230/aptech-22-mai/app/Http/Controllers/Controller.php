<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function quetNha(){
        return view('welcome');
    }
    function layTatCaNguoiDung(){
        $users = DB::table('users')->get();
        return view('users', [
            'users' => $users,
            'loichao' => 'Hello World'
        ]);
    }
}
