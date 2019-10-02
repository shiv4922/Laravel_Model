<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class ExController extends Controller
{
    public function in2()
    {
    	echo "string";

    	$Ex= new Ex;

    	$Ex->name = "shiv";
    	$Ex->phone = "85207418963";
    	//$Ex->save();

    	//print_r($Ex);

    	$product=$Ex->save();
    	print_r($product);


    }
}
