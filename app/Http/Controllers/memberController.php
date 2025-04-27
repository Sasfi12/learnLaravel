<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class memberController extends Controller
{
    public function index() {
        $members = Member::where('genre','=','Homme')->get();
        return view('page.member' , ["members" => $members]); 
    }
}
