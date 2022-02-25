<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APICallController extends Controller
{
    function index()
    {
        //localhost is a key which we are using in Appservice provider
        //use for making baseurl as fixed before calling api
        
        /*
        $response = Http::localhost()->get('/list');

        //Fist of all we have to check API status code
        //dd($response->status());
        //e.g 200 => success
        // 400 => error
        // 404 => page not found
        // 201 => data not found
        // 401 => un -authroize user

        //dd($response->body());

        //dd($response->json());

        


        //dd($response->ok());

        //dd($response->clientError());

        //dd($response->serverError());


        dd($response->successful());
        */

        //return Http::dd()->get($api);




        $create = Http::localhost()->post("/create",[
            "name" => "ali"
        ]);

        dd($create->json());
    }
}
