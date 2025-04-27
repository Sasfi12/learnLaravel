<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeederModel;
class seederController extends Controller
{
    public function index() {
        $seeders = SeederModel::all();
        return view('page.seeder' , [$seeders => "seeders"]);
    }
}
