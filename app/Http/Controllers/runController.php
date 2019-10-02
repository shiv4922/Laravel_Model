<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\run;

class runController extends Controller
{
    public function input(){

    	//echo "hj";

    	$A=new run();

    	$A->name ="raj";
    	$A->save();
    	//$data=$A->save();
    }

     public function output(){

    	//echo "hj";

    	$output=new run();

    	$data = $output->all();
    	$data = $output->find(2);
    	$data = $output->find([1,2]);
    	print_r($data);

    	foreach($data as $key=> $value){
			echo $value['name'];}

    	    }


}
