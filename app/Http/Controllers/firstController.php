<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index() {
        $myObject = [
           (object)["id" => 0 , "nom" => "Sufyan0" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 1 , "nom" => "Sufyan1" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 2 , "nom" => "Sufyan2" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 3 , "nom" => "Sufyan3" , "email" => "CringeGuy@hotmail.com" , "age" => 21],
           (object)["id" => 4 , "nom" => "Sufyan4" , "email" => "CringeGuy@hotmail.com" , "age" => 21]
        ];
        return view('page.about' , compact('myObject')); 
    }
}
