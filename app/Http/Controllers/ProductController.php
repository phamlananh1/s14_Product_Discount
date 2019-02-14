<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $Product = $request->Product;
        $Price = $request->Price;
        $Discount = $request->Discount;
        $result = $Price * $Discount * 0.1;
        $newPrice = $Price - $result;
        return view('display-discount', compact('Product', 'Price', 'Discount','result', 'newPrice'));
    }
}
