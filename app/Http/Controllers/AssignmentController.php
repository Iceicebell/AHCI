<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = Assignment::where('coord_id', auth()->id())->get();
        return view('coordinator.coordinatorDash', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'assignment_name' => 'required',
            'description' => 'required',
            'due_date' => 'required',
        ]);

        $assignment = new Assignment;
        $assignment->assignment_name = $request->assignment_name;
        $assignment->description = $request->description;
        $assignment->due_date = $request->due_date;
        $assignment->coord_id = auth()->id();
        $assignment->save();

        return redirect('coordinator/coordinatorDash')->with('success', 'assignment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
