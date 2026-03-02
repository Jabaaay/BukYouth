<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youth;
use App\Models\LydcMember;
use App\Models\YouthImage;
class MunicipalityController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $youths = Youth::all();
    $imagePath = YouthImage::where('is_primary', true)->pluck('image_url', 'youth_id')->toArray();
    return view('organizations.index', compact('youths', 'imagePath'));

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
       //show only the specific youth that was clicked
       $youth = Youth::findOrFail($id);
       $lydcMembers = LydcMember::where('youth_id', $id)->get();
       
       return view('organizations.show', compact('youth', 'lydcMembers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $youth = Youth::findOrFail($id);
        return view('organizations.edit', compact('youth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $youth = Youth::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:youth,email,' . $youth->id,
            'contact_number' => 'required|string|max:20',
            'facebook_page' => 'nullable|string|max:255',
            'registered_count' => 'required|integer',
            'lydp_plan' => 'required|string',
            'lydp_status' => 'required|in:Pending,Approved,Rejected',
            'municipality' => 'required|string|max:255',
            'brgy' => 'required|string|max:255'
        ]);

        // Update the LYDO record in the database
        $youth->update($request->all());

        // Redirect back to the youth index page with a success message
        return redirect()->route('organizations.index')->with('success', 'Organization updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $youth = Youth::findOrFail($id);
        $youth->delete();

        return redirect()->route('organizations.index')->with('success', 'Organization deleted successfully!');
    }
}
