<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flashcard;
class flashcardController extends Controller
{
    public function index() {
        $Cards = Flashcard::all();
        return view("page.flashcards" , compact('Cards'));
    }
}
