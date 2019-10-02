<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Phone;

class PhoneController extends Controller
{
    //


    public function insert(){

    	return view('phone.insert');
    }

    public function save(Request $request){

    	//dd($request->all());
    	$phone = New Phone;

    	$phone->name = $request->name;
    	$phone->price = $request->price;

    	$insert=$phone->save();
    }

    public  function index(){

    	$phone =Phone::all();

    	return view('phone.index', compact('phone'));
    }

    public function edit($id){

    	$phone = Phone::find($id);
    	return view('phone.edit', compact('phone'));
    }

    public function update(Request $request){

    	$phone= Phone::find($request->id);

    	$phone->name = $request->name;
    	$phone->price = $request->price;
    	$update=$phone->save();

    }

    public function delete($id){

    	$phone =Phone::find($id);
    	$delete=$phone->delete();
    }
}
