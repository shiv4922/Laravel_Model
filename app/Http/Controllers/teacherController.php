<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\teacher;

use App\stud;	// model name or class name

class teacherController extends Controller
{
    public function in(){

    //	echo "string";

    	$variable = new teacher();

    	$variable->name="shiv";
    	$variable->phone="7418529630";
    	 $data=$variable->save();

    	 print_r($data);
    }

    public function in1(){

    	$stud = new stud();

    	$stud->name="raj";
    	$stud->email="reso@gmail.com";
    	$stud->phone="7894561230";
    	$stud->password="85522";

    	$data=$stud->save();
    	print_r($data);

	//----------------------FILLABLE METHOD-----------------//
    	// new method to insert by use of fillable

    	/*$stud = new stud([

    		"name"=>"shivraj",
    		"email"=>"shiv@gmail.com",
    		
    		"password"=>"fgf",
    		"phone"=>"7854646465"
    	
    	]);

   // make fillable in stud.php or in model 

    	$stud->save();*/



  //---------------------GUARDED METHOD--------------------//

    	/*$stud = new stud([

    		"name"=>"shiahjj",
    		"email"=>"shi@gmail.com",
    		
    		"password"=>"ffu",
    		"phone"=>"7854646465"
    	
    	]);

   // make GUarded in stud.php or in model 

    	$stud->save();*/

    }





    public function out(){

    	$show = new stud();
	
		$data = $show->all();
		$data = $show->orderby("id","desc")->get();

        $data = $show->find(2);  // perticular data at id=2

        $data = $show->find([1,2,3,4]); 


		print_r($data);

		foreach($data as $key=> $value){
			echo $value['name']."".$value['phone']."</br>";
			//print_r($data);
		}    	


    }



    public function update(){

        $update = new stud();

        $data = $update->find(2); // model object fatch

        $data->name="raju";
        $data->email="reso.raj@gmail.com";
        $data->phone="7894561231";
        $data->password="855220";

        $data->save();
        print_r($data);
    }

     public function delete(){

        $delete = new stud();

        $data = $delete->find(5);

        $data->delete();
        print_r($data);
    }


}
