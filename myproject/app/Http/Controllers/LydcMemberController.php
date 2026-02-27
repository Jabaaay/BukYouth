<?php

namespace App\Http\Controllers;
use App\Models\LydcMember;
use App\Models\Youth;

use Illuminate\Http\Request;

class LydcMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lydos = Youth::all(); // for dropdown

        // return view('lydc.create', compact('lydos'));
        return view('youth.create', compact('lydos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'youth_id' => 'required|exists:youth,id', // ensures LYDO exists
    ]);

    LydcMember::create([
        'name' => $request->name,
        'youth_id' => $request->youth_id, // foreign key link
    ]);

    return redirect()->back()->with('success', 'LYDC Member added successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
