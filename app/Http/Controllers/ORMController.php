<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ORMController extends Controller
{
    function index()
    {
        

        /*
        // Save 
        $obj = new Employee();
        $obj->name = "Raza";
        $obj->age = 20;
        $obj->desc_detail = "it's aphp student";
        $obj->dob  = "2021-01-02";

        $is_save = $obj->save();

        dd($is_save);

        */

        /*
        //Update
        //it work on primary key value
        $obj = Employee::find(1);

        $obj->name = "updated Raza Name";
        $is_update = $obj->save();

        dd($is_update);

        */

        /*
        //delete

        $obj = Employee::find(1);
        $is_deleted = $obj->delete();
        dd($is_deleted);

        */


        //$list = Employee::all();
        $list = Employee::get();
        return view("emp")->with("list",$list);
    }
}
