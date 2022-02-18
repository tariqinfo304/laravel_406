<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
