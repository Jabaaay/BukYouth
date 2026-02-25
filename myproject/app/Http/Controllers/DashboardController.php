<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youth;
use App\Models\Sk_President;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lydo = Youth::where('type', 'LYDO')->count();
        $sk_presidents = Sk_President::count();
        $total_registered = number_format(Youth::sum('registered_count'), 0, ',', ',');
        
        $total_organizations = Youth::where('type', 'LYDO')->count();
        
        // Get registration data by municipality
        $municipality_data = Youth::select('municipality', \DB::raw('sum(registered_count) as total'))
            ->groupBy('municipality')
            ->orderBy('total', 'desc')
            ->get();
        
        return view('dashboard', compact('lydo', 'sk_presidents', 'total_registered', 'total_organizations', 'municipality_data'));
    }
}
