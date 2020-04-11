<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function hienThiSanPham(){
        $idSanPham = DB::table('products')->get();

        return view('products', [
            'products' => $idSanPham
        ]);
    }
}
