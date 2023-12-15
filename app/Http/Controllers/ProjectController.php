<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{

    $projects = Project::where('coord_id', auth()->id())->get();
    return view('coordinator.coordinatorDash', compact('projects'));
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
        'proj_name' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $project = new Project;
    $project->proj_name = $request->proj_name;
    $project->image = $imageName;
    $project->coord_id = auth()->id();
    $project->save();

    return redirect('coordinator/coordinatorDash')->with('success', 'Project created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('coordinator.assignment', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
   {
       $project->delete();
       return redirect('coordinator/coordinatorDash')->with('success', 'Project deleted successfully.');
   }
}
