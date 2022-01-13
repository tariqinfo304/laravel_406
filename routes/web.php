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




