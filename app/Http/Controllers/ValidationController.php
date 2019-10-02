<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use validator;

class ValidationController extends Controller
{
    public  function myform(){

    	return view ("form.myform");
    }

    public function submit(Request $variable){

    	//echo "hello shiv";

    	$this->validate($variable,[

    		"name"=>"required",
    		"email"=>"required|max:30|min:8|unique:studs",
    		"password"=>"required"
          ],[
          		// our messages
          	"name.required"=>"must fill",
          	"email.required"=>"must  fill email",
          	"password.required"=>"must fill password"

          ]);

    	
    	print_r($variable->all());
    	echo "</br>";
    	die("FORM SUBMITTED");
    }
}
