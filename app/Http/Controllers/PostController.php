<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;		// class name

class PostController extends Controller
{
    public function index(){

    	//echo "show all";
    	$post = Post::all();
    	return view ('post.index', compact ('post'));
    }



    public function create(){
    	//echo "show create";
    	return view('post.create');
    }

    public function save(Request $request){

    	 //dd($request->all());  show data

    	$post = New Post;
    	$post->title= $request->title;
    	$post->body= $request->body;
    	$created = $post->save();


    }


    public function edit($id){

    	$post = Post::find($id);
    	return view('post.edit', compact('post'));
    }

    public function update(Request $request){

    	$post = Post::find($request->id);

    	$post->title= $request->title;
    	$post->body =$request->body;

    	$update = $post->save();


    }

    public function delete($id){
    	$post= Post::find($id);
    	$delete= $post->delete();
    }


}
