<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EmployController extends Controller
{
    public function inserts()
    {
    	//$data=DB::table('employs')->insert(['name'=>'shiv','email'=>'shiv@gmail.com','password'=>'shiv','phone'=>8529637410,'salary'=>'852']);
    	$data=DB::table('employs')->insert(['name'=>'raj','email'=>'raj@gmail.com','password'=>'raj','phone'=>8529637410,'salary'=>'852']);


    	echo $data;
    }

    public function shows()
    {
    	$data=DB::table('employs')->get();
    	print_r($data);

    	return view("show", compact('data'));
    	return view('show');
    }

     public function updates()
    {
    	$data=DB::table('employs')->where(['id'=>1])->update(['name'=>'pninfo']);
    	print_r($data);

    	//return view("show", compact('data'));
    	//return view('show');
    }

    public function deletes()
    {
    	$data=DB::table('employs')->where(['id'=>1])->delete();
    	print_r($data);

    	//return view("show", compact('data'));
    	//return view('show');
    }


}
