<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function hienThiTatCaBaiViet(){
        // $posts = DB::table('posts')->get();
        // return view('posts', [
        //     'posts' => $posts
        // ]);

        $posts = Post::get();
        return view('posts', [
            'posts' => $posts
        ]);
    }
}