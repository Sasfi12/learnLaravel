<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seeder;
class seederController extends Controller
{
    public function index() {
        $seeders = Seeder::all() ;
        return view('page.seeder' , [$seeders => "seeders"]);
    }
}
