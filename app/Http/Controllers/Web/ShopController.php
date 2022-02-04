<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductImages;

class ShopController extends Controller
{
    
    function index()
    {
        return view("web.shop")->with("list",Product::all());
    }

    function shop_detail($id)
    {
        $obj = Product::find($id);
        $images = ProductImages::where("product_id",$id)->get();
        return view("web.shop_detail")
            ->with("obj",$obj)
            ->with("images",$images);
    }
}
