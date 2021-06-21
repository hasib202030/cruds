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
        // Show data in table 
        $showData = Crud::all(); 

         
          //  return view('show_data');

        //  $showData = Crud::simplePaginate(4);
        $showData = Crud::Paginate(2);
            return view('show_data', compact('showData'));

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


    
     // edit add 
     public function editData($id=null){
        $editData = Crud::find($id); 
        return view('edit_data', compact('editData'));

  }





// update data  // $id = url id pass
  public function updateData(Request $request, $id){

    $rules= [
            'student_name'=>'required|max:10',
            'student_email'=>'required|email',
    ];

    $this->validate($request, $rules);

    // insert data object 
    $crud = Crud::find($id);

    $crud->student_name = $request->student_name;
    $crud->student_email = $request->student_email;
    $crud->save();
    Session::flash('msg', 'Student Update SuccessyFully');
    
    return redirect('/');
}






public function deleteData($id=null){
    $deleteData = Crud::find($id);

    $deleteData->delete();
    Session::flash('msg', 'Student Delete SuccessyFully');    
    return redirect('/');

}



}
