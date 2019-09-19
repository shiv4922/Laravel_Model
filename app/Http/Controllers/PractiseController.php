<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class PractiseController extends Controller
{
    public function in(){
    	//echo "string";

    	$data=DB::table('shivs')->insert(['name'=>'shiv','pass'=>'514612fg']);
    	print_r($data);
    }

    public function up(){

    	$data=DB::table('shivs')->get();
    	print_r($data);

    	return view("dis", compact('data'));
    }

    public function up2(){

    	$data=DB::table('shivs')->where(['id'=>1])->update(['name'=>'luks']);
    	print_r($data);
    }

    public function del(){

    	$data=DB::table('shivs')->where(['id'=>1])->delete();

    	echo $data;
    }

}
