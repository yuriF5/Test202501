<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
// 一覧画面表示
    public function index()
    {
        return view('products.index');
    }
// 一覧画面表示
    public function register()
    {
        return view('products.register');
    }

// 一覧画面表示
    public function detail()
    {
        return view('products.detail');
    }
}