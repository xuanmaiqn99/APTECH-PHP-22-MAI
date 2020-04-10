<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){
       $users = User::get();
       return view('users.index', 
       [
           'users' => $users
       ]);
   }
   function show($id){
    //    dd($id);
        $user = User::where('id', $id)->first();
        // dd($user);
        return view('users.show', [
            'user' => $user  //ko co s, vi chi in 1 nguoi
        ]);
   }
   function create(){
       return view('users.create');
   }

   function store(){
        User::create([
           'name' => $_POST['name'],
           'email' => $_POST['email']
        ]);
        $users = User::get();
        return view('users.index',
            [
                'users' => $users
            ]
        );
   }
   function edit($id){
       $user = User::where('id', $id)->first();
       return view('users.edit', [
           'user' => $user
       ]);
   }
   function update($id){
        // $name = $_POST['name'];
        User::where('id', $id)->update(
            [
                'name' => $_POST['name']
            ]);
            $user = User::get();
            return view('users.index', [
                'users' => $user
            ]);
   }
}
