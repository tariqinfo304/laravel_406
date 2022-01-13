<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function tariq()
    {
    	$title = "Tariq Home Page";
    	$heading = "hi tariq";

    	return view("home",[
    			"heading" => $heading,
    			"num" => 12,
    			"list" => [

    				[
    					"id" => 1,
    					"name" => "abc"
    				],
    				[
    					"id" => 2,
    					"name" => "xyz"
    				],
    				[
    					"id" => 1,
    					"name" => "lms"
    				]
    			]
    		])->with("title_value",$title);
    }


    function template()
    {
    	return view("child");
    }
}
