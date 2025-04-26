<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index() {
        $myObject = [
           (object)["id" => 0 , "nom" => "Guy0" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 1 , "nom" => "Guy1" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 2 , "nom" => "Guy2" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 3 , "nom" => "Guy3" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 4 , "nom" => "Guy4" , "email" => "CringeGuy@hotmail.com" , "age" => 21]
        ];
        return view('page.about' , compact('myObject')); 
    }
}