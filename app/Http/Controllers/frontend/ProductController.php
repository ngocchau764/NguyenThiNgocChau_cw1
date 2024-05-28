<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ProductController extends Controller
{
    public function index()
    {
        return view("frontend.product");
    }
    public function product_detail($slug)
    {
        return view("frontend.product_detail");
    }
}