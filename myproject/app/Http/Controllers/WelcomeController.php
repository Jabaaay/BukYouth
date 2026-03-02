<?php

namespace App\Http\Controllers;

use App\Models\Youth;
use App\Models\Sk_President;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display the welcome page with LYDO and SK President data.
     */
    public function index()
    {
        // Get latest LYDO organizations (limit to 5 for display)
        $lydos = Youth::where('type', 'LYDO')
            ->select('name', 'contact_number', 'municipality', 'id')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        // Get latest SK Presidents (limit to 5 for display)
        $skPresidents = Sk_President::select('name', 'contact_number', 'municipality', 'id')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('welcome', compact('lydos', 'skPresidents'));
    }
}
