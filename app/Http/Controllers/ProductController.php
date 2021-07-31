<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct()
    {
        $products = [
            ["name" => "Phone"],
            ["name" => "Tablet"],
            ["name" => "Watch"],
            ["name" => "Television"],
            ["name" => "phone"],
            ["name" => "Freeze"],
        ];

        Product::insert($products);
        return "Products has been inserted successfully!";
    }

    public function search()
    {
        return view('search');
    }

    public function autoComplete(Request $request)
    {
        $datas = Product::select("name")
                        ->where("name", "LIKE", "%{$request->terms}%")
                        ->get();
        return response()->json($datas);
    }
}
