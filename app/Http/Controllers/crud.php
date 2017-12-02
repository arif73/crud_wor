<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class crud extends Controller
{
     public  function index(){
         return view('crud.index');
     }
     public function view(){

         $student=student::all();
         return view('crud.view',compact('student'));
     }

     public function savestudent(Request $Request){


         $student=new student();
         $student->first_name=$Request->input('first_name');
         $student->last_name=$Request->input('last_name');
         $student->email=$Request->input('email');
         $student->password=$Request->input('password');
         $student->address=$Request->input('address');
         $student->save();

         Session::flash('message','student information insert successfully');

        return redirect('/');


     }

     public  function delete($id){

         student::find($id)->delete();
         Session::flash('message','Delete successfully');
         return redirect('/view');
     }

     public function edit($id){
         $student=student::find($id);
         return view('crud.edit',compact('student'));
     }

     public function updatestudent(Request $Request){
         $id=$Request->input('id');
         $student=student::find($id);
         $student->first_name=$Request->input('first_name');
         $student->last_name=$Request->input('last_name');
         $student->email=$Request->input('email');
         $student->address=$Request->input('address');

         $student->save();
         return redirect('/view');
     }


}
