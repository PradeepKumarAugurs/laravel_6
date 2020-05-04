<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        //return $request->input(); 
    }

    public  function checkAge()
    {
        echo  "this is  Age  checker Controller";
    }

    //  load  to  registration view :  here  after  submit  get  flashdata message 
    public  function  registration_view()
    {
        return  view('registration'); 
    }

    //  save  registration in the table  and  set  flash data message 
    public  function  register(Request $request)
    {  
        $request->validate(['name'=>'required','phone'=>'required','email'=>'required']); 
        $request->session()->flash('success',ucfirst($request->input('name')).' registerd successfully..');
        return  redirect('/'); 
    }

    //  db check 
    public  function  dbCheck()
    {
        //  $result=DB::table('user')->avg('id');  
        //  $result=DB::table('user')->sum('id');  
        //  $result=DB::table('user')->max('id');  
        //  $result=DB::table('user')->where('name','ram')->delete();  
        //  $result=DB::table('user')->where('name','sam')->update(['address'=>'Gomti Nagar Lucknow 226010']);  
        //  $result=DB::table('user')->insert(['name'=>'ram','email'=>'ram@gmail.com','address'=>'fsf fsdf  ']);  
        //  $result=DB::table('user')->count();  
        //  $result=DB::table('user')->find(1);  //  find  Only worked  for  id => auto increment  "Column"
        //  $result=DB::table('user')->where('name','Pradeep')->get();
         $result=DB::table('user')->get();
        //  $result=DB::select("select * from user");
        print_r($result); 
        echo "\n";
        return $result; 
    }

    public function  checkJoin()
    {
        $result=DB::table('user')
        ->select('company.name','user.email')
        ->join('company','user.id','company.user_id')
        ->where('company.name','Samsung')
        ->get();
        print_r($result); 
        echo "\n";
        return $result; 
    }



}
