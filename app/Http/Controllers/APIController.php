<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResoucre;
use App\Http\Resources\ProductCollection;

class APIController extends Controller
{
    
    function send_respose($status,$data)
    {
        $obj = [
            "status" => $status,
            "data"  => $data
        ];
        return response()->json($obj); 
    }

    function get_product()
    {

        $list = Product::all();
        return $this->send_respose(200,$list);
    }

    function list(Request $req)
    {
        $list = Product::paginate(5);
        
        //$resource = new ProductResoucre($list);
        $resource = ProductResoucre::collection($list);
        
        
        //$resource = new ProductCollection($list);

        return $resource;
    }

    function create_product(Request $req)
    {
        if(!empty($req->name))
        {

        }
        else
        {
            $err = ["name" => "name is required"];
            return $this->send_respose(400,$err);
        }
    }
}
