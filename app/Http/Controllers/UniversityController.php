<?php

namespace App\Http\Controllers;

use App\Models\university;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::all();
        return view('admin/universities', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'univ_name' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    University::create([
        'univ_name' => $request->univ_name,
        'image' => $imageName,
    ]);

    return redirect()->route('universities.index')
                    ->with('success','University created successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(university $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(university $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        $request->validate([
            'univ_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            $university->update([
                'univ_name' => $request->univ_name,
                'image' => $imageName,
            ]);
        } else {
            $university->update([
                'univ_name' => $request->univ_name,
            ]);
        }

        return redirect()->route('universities.index')
                        ->with('success','University updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $university = University::find($id);
    $university->delete();

    return redirect()->route('universities.index')
                    ->with('success','University deleted successfully.');
}
}
