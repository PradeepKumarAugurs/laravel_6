<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    

    public function index($id){
        // echo 'Hello '.$id;  
        return ['id'=>$id,'name'=>'Pradeep'];
    }

    public  function  checkRequest(Request $request)
    {
        //  print_r($request->input()); 
        //  echo  $request->url(); 
        //  echo  $request->fullurl(); 
        //  echo  $request->path(); 
        //  echo  $request->method(); 
        /* if($request->isMethod('GET')){
            echo 'Get';
        }
        else
        {
            echo 'post';
        } */
        print_r($request->query());
    }
    
    public function submit(Request $request)
    {
        $request->validate(['user'=>'required','phone'=>'required|min:10|max:10','password'=>'required|min:6|max:8']); 
        print_r($request->input());
        // return $request->input();

    }



}
