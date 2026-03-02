<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sk_President;

class SKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sk = Sk_President::all();
        return view('sk.index', compact('sk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('youth.create-sk');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:sk,email',
            'contact_number' => 'required|string|max:20',
            'type' => 'SK President', // Set the type to 'SK President' for all entries created through this method
            'municipality' => 'required|string|max:255',
            'brgy' => 'required|string|max:255'

            

        ]);

        // Create a new SK President record in the database
        Sk_President::create($request->all());

        // Redirect back to the youth index page with a success message
        return redirect()->route('youth.index')->with('success', 'SK President added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sk = Sk_President::findOrFail($id);
        return view('sk.show', compact('sk'));
    }

    /**
     * Display SK President profile for public viewing.
     */
    public function showProfile($id)
    {
        $skPresident = Sk_President::findOrFail($id);
        
        return view('sk-president.profile', compact('skPresident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sk = Sk_President::findOrFail($id);
        return view('sk.edit', compact('sk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:youth,email,' . $id,
            'contact_number' => 'required|string|max:20'
        ]);

        $sk = Sk_President::findOrFail($id);
        $sk->update($request->all());
        return redirect()->route('sk.index')->with('success', 'SK President updated successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sk = Sk_President::findOrFail($id);
        $sk->delete();
        return redirect()->route('sk.index')->with('success', 'SK President deleted successfully!');
    }
}
