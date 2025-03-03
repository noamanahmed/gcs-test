<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\University;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities =  University::paginate(10);
        return view('universities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('university.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUniversityRequest $request)
    {
        $university = University::create($request->validated());
        return back()->with('success','The university has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        return view('university.show',compact('university'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return view('university.show',$university);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUniversityRequest $request, University $university)
    {
        $university = $university->fill($request->validated())->save();
        return back()->with('success','The university has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        $university->delete();
        return back()->with('success','The university '. $university->name .' has been deleted');
    }
}
