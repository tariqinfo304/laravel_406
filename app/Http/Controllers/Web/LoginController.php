<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;

class LoginController extends Controller
{
    function index()
    {
        $pass = "tariq";

        /*
        $hash = Hash::make($pass);

        if(Hash::check($pass,$hash))
        {
            echo "Valid Password";
        }
        else
        {
            echo "Invalid Password";
        }

        echo $hash;
        */
        /*
        $cryp = Crypt::encryptString($pass);
        echo $cryp;
        echo "<br/>";
        echo Crypt::decryptString($cryp);
        */

        return view("web.login");

    }
    function login(Request $req)
    {
        // dd($req->all());

        $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email",$req->email)->first();

        if(!empty($user))
        {
            session([
                "email" => $user->email,
                "name" => $user->name,
                "user_id" => $user->id
            ]);
            if(Hash::check($req->password,$user->password))
            {
                return redirect("web");
            }
            else
            {
                return back()
                    ->withErrors(["error" => "user/password is wrong"])
                    ->withInput();
            }
        }
        return redirect("web/login");
    }
    function add_user()
    {
        return view("web.register");
    }
    function save(Request $req)
    {
        // dd($req->all());

        $req->validate([
            "name" => "required",
            "password" => "required",
            "email" => "required"
        ]);


        $user  = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();

        return redirect("web");

    }


    function logout(Request $req)
    {
        $req->session()->forget('name');
        $req->session()->forget('email');

        $req->session()->flush();

        return redirect("web/login");
    }
}
