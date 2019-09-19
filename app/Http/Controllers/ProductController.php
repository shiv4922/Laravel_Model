<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;	//class name

class ProductController extends Controller
{
    public function filldata(){

    	//echo "shiv";

    	$product = new Product(); //model ka object bnana h

    		$product->name ="shiv";
    		$product->password ="dfgh";
    		$product->save();

    	//print_r($product); //return id
    		$data =$product->save(); //save method table
    	print_r($data);	//return value
    	echo "<pre>";

    	//print_r($Product['id']);		//get array


    	exit();
    }
}
