<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsString;
use Illuminate\Http\Request;

class student extends Controller
{
    //

    public function mssg(){
        echo "hello from message";
    }

    public function create(){
        return view('create');
    }

    // public function store(Request $request){
    //     // dd($request->all());
    //     echo $request->name;
    // }
    
    public function profile(Request $request){
        // dd($request->all());
        $error_arr=[];
        
        if(empty($request->name)){
            $error_arr[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
            Pleaese fill the name
          </div>";
          }if(empty($request->email)){
            $error_arr[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
            Pleaese fill the email
          </div>";
          }if(empty($request->password) && strlen($request->password) < 6){
            $error_arr[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
            Pleaese fill the password
          </div>";
          }if(empty($request->adress) && strlen($request->adress) < 10){
            $error_arr[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
            Pleaese fill the adress
          </div>";
          }if(empty($request->gender) || $request->gender == "Choose..."){
            $error_arr[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
            Pleaese fill the gender
          </div>";
          }if(empty($request->linkedin)){
            $error_arr[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
            Pleaese fill the linkedin
          </div>";
          }

          foreach($error_arr as $errors){
              echo $errors."<br>";
          }
          if(empty($error_arr)){
      return view("profile",compact('request'));
    }
}
}
