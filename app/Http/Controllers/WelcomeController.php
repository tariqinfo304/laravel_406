<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
    	echo "Welcome First Lecture about Controller";
    }


    function show($id)
    {
    	echo $id;
    }
}
