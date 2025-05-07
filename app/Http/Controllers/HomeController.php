<?php

namespace App\Http\Controllers;

use App\Models\Highpoint;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $highpoints = Highpoint::all();
        $featuredHighpoint = Highpoint::where('state', 'AK')->first(); // Denali as featured

        return view('home', [
            'highpoints' => $highpoints,
            'featuredHighpoint' => $featuredHighpoint,
        ]);
    }
}
