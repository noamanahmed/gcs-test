<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\University;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __invoke(Request $request)
    {   
        $universities = University::paginate(10);
        $programs = Program::with('university')->paginate(10);
        return view("welcome",compact("universities","programs"));
    }
}
