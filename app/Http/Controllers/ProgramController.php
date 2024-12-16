<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Program;
use App\Models\University;

class ProgramController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::all(); // TODO Optimize this code
        return view('program.create',compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramRequest $request)
    {
        $program = Program::create($request->validated());
        return back()->with('success','The program has been created');
    }
}
