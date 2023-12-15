<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/adminDash', compact('users'));
        return view('admin.coordinatorDisplay', compact('coordinators'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        // Update the user's data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        // Update other fields as necessary

        // Save the changes
        $user->save();

        // Redirect back to the user's page (or wherever you want)
        return redirect('admin/home')->with('success','User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showCoordinators()
{
    $coordinators = User::where('role', 'coordinator')->get();
    return view('admin.coordinatorDisplay', compact('coordinators'));
}

public function showTrainees()
{
    $trainees = User::where('role', 'trainee')->get();
    return view('admin.studentsTable', compact('trainees'));
}
}
