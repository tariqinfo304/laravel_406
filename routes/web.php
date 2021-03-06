<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){

	echo "home page";
});

Route::get('test',function(){

	echo "Test page";
});

//Route Parameters

Route::get("get_student/{id}",function($id){

	echo "student id : " . $id;
});

Route::get("std/{id}/show/{name}",function($id,$name){

	echo "student id : " . $id  . " Name : " . $name;
});

//Optional parameter

Route::get("show/{name?}",function($name=NULL){
	echo $name;
});



//Validation of router parameters

Route::get("val/{id}/{name}",function($id,$name){
	echo $id . " : "  .$name;
})->where(["id"=>"[1-9]+" , "name" => "[a-zA-Z]{5}"]);
//{5} fixed chatrcters validation
// + it means more than one


Route::get("two",function(){
	echo "two";
});

Route::redirect("one","two"); // 302

//Route::redirect("one","two",301); // 301
//OR
//Route::permanentRedirect("one","two"); // 301



//Encoded Forward Slashes

Route::get("do/{name}",function($value){
	echo $value;
})->where("name",".*");


//Named Routes

Route::get("test1/{id}",function($id){

	echo "tes1 : " . $id;

})->name("raza");


//Generating URLs To Named Routes
Route::get("call",function(){


	return redirect()->route("raza",["id" =>12]);
}); 


///Route Prefixes

Route::prefix("user/{id}")->group(function($id){


	Route::get("add/{name}",function($id,$name){ 
		echo "add" . $id . $name;
	});
	Route::get("edit",function(){ echo "edit";});
	Route::get("delete",function(){ echo "delete";});
});


// Route::fallback(function () {
//     echo "IT will call when any rouet will not exit for user point of view";
// });


/////////////////////////////
/////////// controller /////
///////////////////////////


//Applymiddleware on spcific route
//Route::get("welcome",[App\Http\Controllers\WelcomeController::class,"index"]);
Route::get("do/{id}",[App\Http\Controllers\WelcomeController::class,"show"]);
Route::get("do_call",App\Http\Controllers\CallController::class);


//////////////////////
//Middleware
/////////////////////

Route::get("welcome",[App\Http\Controllers\WelcomeController::class,"index"])
	->middleware("test");


Route::get("test12",[App\Http\Controllers\WelcomeController::class,"index"])
	->middleware("test_group");



Route::middleware("test")->group(function(){
	Route::get("t1",[App\Http\Controllers\WelcomeController::class,"index"]);
	Route::get("t2",[App\Http\Controllers\WelcomeController::class,"index"]);
	Route::get("t3",[App\Http\Controllers\WelcomeController::class,"index"]);
});



////////////////
/// View //
//////////////


Route::get("view",[App\Http\Controllers\ViewController::class, "tariq"]);


Route::get("temp",[App\Http\Controllers\ViewController::class, "template"]);


//View Componenet

Route::get("comp",[App\Http\Controllers\ComponentController::class, "index"]);






Route::get("orm",[App\Http\Controllers\ORMController::class,"index"]);



//Template integration



Route::prefix("web")->group(function(){



	Route::get("login",[App\Http\Controllers\Web\LoginController::class,"index"]);
	Route::get("logout",[App\Http\Controllers\Web\LoginController::class,"logout"]);
	Route::post("login",[App\Http\Controllers\Web\LoginController::class,"login"]);
	Route::get("register",[App\Http\Controllers\Web\LoginController::class,"add_user"]);
	Route::post("register",[App\Http\Controllers\Web\LoginController::class,"save"]);

	Route::get("/",[App\Http\Controllers\Web\HomeController::class,"index"]);
	
	Route::get("shop",[App\Http\Controllers\Web\ShopController::class,"index"]);
	Route::get("shop_detail/{id}",[App\Http\Controllers\Web\ShopController::class,"shop_detail"]);



	Route::get("shop_cart",[App\Http\Controllers\Web\HomeController::class,"shop_cart"]);
	Route::get("checkout",[App\Http\Controllers\Web\HomeController::class,"checkout"]);
	Route::get("contact",[App\Http\Controllers\Web\HomeController::class,"contact"]);
	Route::get("blog_detail",[App\Http\Controllers\Web\HomeController::class,"blog_detail"]);
	Route::get("blog",[App\Http\Controllers\Web\HomeController::class,"blog"]);


	
	Route::get("fav/{id}",[App\Http\Controllers\Web\ProductController::class,"fav"])
		->middleware("session");


	Route::get("fav_list",[App\Http\Controllers\Web\ProductController::class,"fav_list"])
		->middleware("session");

	Route::get("remove_fav/{id}",[App\Http\Controllers\Web\ProductController::class,"remove_fav"])
		->middleware("session");

	Route::resource("product",App\Http\Controllers\Web\ProductController::class)
		->middleware("session");



	

});


Route::get("api_call",[App\Http\Controllers\APICallController::class,"index"]);


