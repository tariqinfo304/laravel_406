<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view("web.home");
    }

    function shop()
    {
        return view("web.shop");
    }

    function shop_detail()
    {
        return view("web.shop_detail");
    }

    function blog()
    {
        return view("web.blog");
    }
    function blog_detail()
    {
        return view("web.blog_detail");
    }

    function contact()
    {
        return view("web.contact");
    }

    function checkout()
    {
        return view("web.checkout");
    }

    function shop_cart()
    {
        return view("web.shop_cart");
    }
}
