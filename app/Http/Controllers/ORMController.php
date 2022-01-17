<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Raza;

use App\Models\User;
use App\Models\UserCNIC;
use App\Models\UserAddress;

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
       // $list = Employee::get();
        //return view("emp")->with("list",$list);


        //Advance 

        /*
        $r = new Raza();
        $r->name = "ali";
        $r->user_id=1;
        $is_save = $r->save();
        dd($is_save);
        */

        
        // $obj = Raza::create(
        //             [
        //                 'name' => 'London to Paris',
        //                 "user_id"=>"1"
        //             ]
        //         );


        // dd($obj_arr);
        
        /*
        $obj->name = "updated value";


        dd($obj);
        //$obj->name = "updated value";


        //echo $obj->getOriginal("name");

        //print_r($obj->getOriginal());

       // var_dump($obj);
       */


        /*
    echo $obj->isDirty();
        echo "<br>";    
        echo $obj->isClean();
        echo "<br/>";



        echo $obj->isDirty("user_id");
        echo "<br>";    
        echo $obj->isClean("name");
        echo "<br/>";

        */


        // if($obj->isDirty())
        // {
        //     echo "run";
        //     $obj->save();
        // }




        //soft delete because we are using 
        //softDeletes tarit in model
        /*
        $obj = Raza::find(16);
        echo $obj->delete();
        */

        //get all data with deleted also
        //$list = Raza::withTrashed()->get();

        /*
        $list = Raza::onlyTrashed()->get();
        dd($list);
        */



        //Relatioship



        //One-One//


        //direct
        // $u = User::find(1)->cnic;
        // dd($u);

        //in-direct
        //$cnic  = UserCNIC::find(1)->user;
        //dd($cnic);


        //one to many

        //$address = User::find(1)->address;
        //dd($address);
        //in-direct

        $user = UserAddress::find(1)->user;
        dd($user);







    }
}
