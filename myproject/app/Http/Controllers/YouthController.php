<?php

namespace App\Http\Controllers;
use App\Models\Youth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class YouthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('youth.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('youth.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:youth,email',
            'contact_number' => 'required|string|max:20',
            'facebook_page' => 'nullable|string|max:255',
            'registered_count' => 'required|integer',
            'lydc_members' => 'nullable|string',
            'file_plan' => 'required|file|mimes:pdf,doc,docx|max:10240', // Max 10MB
            'lydp_status' => 'required|in:Pending,Approved,Rejected',
            'municipality' => 'required|string|max:255',
            'brgy' => 'required|string|max:255'
        ]);

        // Check if the municipality already exists
        if (Youth::where('municipality', $request->municipality)->exists()) {
            return redirect()->back()->with('error', 'LYDO Municipality already exists!');
        }

        // Handle file upload
        if ($request->hasFile('file_plan')) {
            $file = $request->file('file_plan');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('file_plans', $fileName, 'public');
        }

        // Add the type field for LYDO
        $requestData = $request->all();
        $requestData['type'] = 'LYDO';
        $requestData['file_plan'] = $filePath ?? null;

        // Create a new LYDO record in the database
        Youth::create($requestData);

        // Redirect back to the youth index page with a success message
        return redirect()->route('youth.index')->with('success', 'LYDO added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Youth $youth)
    {
        return view('youth.show', compact('youth'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $youth = Youth::findOrFail($id);
        return view('youth.edit', compact('youth'));
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
            'contact_number' => 'required|string|max:20',
            'facebook_page' => 'nullable|string|max:255',
            'registered_count' => 'required|integer',
            'file_plan' => 'nullable|file|mimes:pdf,doc,docx|max:10240', // Optional file update
            'lydp_status' => 'required|in:Pending,Approved,Rejected',
            'municipality' => 'required|string|max:255',
            'brgy' => 'required|string|max:255'
        ]);

        // Find the existing LYDO record
        $youth = Youth::findOrFail($id);
        
        // Handle file upload if new file is provided
        if ($request->hasFile('file_plan')) {
            // Delete old file if exists
            if ($youth->file_plan && Storage::disk('public')->exists($youth->file_plan)) {
                Storage::disk('public')->delete($youth->file_plan);
            }
            
            $file = $request->file('file_plan');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('file_plans', $fileName, 'public');
            $request->merge(['file_plan' => $filePath]);
        }

        // Update the record
        $youth->update($request->all());

        // Redirect back to the youth index page with a success message
        return redirect()->route('youth.index')->with('success', 'LYDO updated successfully!');
    }

    /**
     * Download the LYDP file
     */
    public function downloadLydp($id)
    {
        $youth = Youth::findOrFail($id);
        
        if (!$youth->file_plan || !Storage::disk('public')->exists($youth->file_plan)) {
            return redirect()->back()->with('error', 'File not found!');
        }

        $filePath = Storage::disk('public')->path($youth->file_plan);
        $fileName = basename($youth->file_plan);
        
        return response()->download($filePath, $fileName);
    }

    /**
     * View the LYDP file in browser
     */
    public function viewLydp($id)
    {
        $youth = Youth::findOrFail($id);
        
        if (!$youth->file_plan || !Storage::disk('public')->exists($youth->file_plan)) {
            return redirect()->back()->with('error', 'File not found!');
        }

        $filePath = Storage::disk('public')->path($youth->file_plan);
        
        return response()->file($filePath);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $youth = Youth::findOrFail($id);
        
        // Delete associated file if exists
        if ($youth->file_plan && Storage::disk('public')->exists($youth->file_plan)) {
            Storage::disk('public')->delete($youth->file_plan);
        }
        
        $youth->delete();

        return redirect()->route('youth.index')->with('success', 'LYDO deleted successfully!');
    }
}
