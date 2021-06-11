<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  Data insert name space 
 use App\Models\Crud;

 // msg add massages

 use Session;

class CrudController extends Controller
{
    public function showData(){

        // $showData = Student::all();
       

   
        return view('show_data');


//    // dada show 
//     //  $showData = Crud::all();

//     $showData = Crud::simplePaginate(4);
// return view('show_data', compact('showData'));

    }

     // student add 
     public function addData(){


           return view('add_data');

     }


     public function storeData(Request $request){

        // form validation code

        // return $request->all();

        $rules= [
                'student_name'=>'required|max:10',
                'student_email'=>'required|email',
        ];

        $this->validate($request, $rules);
   
        // insert data object
        $crud = new Crud;

        $crud->student_name = $request->student_name;
        $crud->student_email = $request->student_email;
        $crud->save();
        Session::flash('msg', 'Student Add SuccessyFully');
        
        return redirect('/');
    }


}
