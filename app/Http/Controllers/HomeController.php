<?php

namespace App\Http\Controllers;

use App\Models\Highpoint;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $query = Highpoint::query();

        // If user is authenticated, load their completion status
        if (auth()->check()) {
            $query->with(['users' => function ($query) {
                $query->where('users.id', auth()->id());
            }]);
        }

        $highpoints = $query->get();
        $userCompletedHighpointsCount = auth()->user()?->highpoints()->wherePivot('completed', true)->count() ?? null;
        $featuredHighpoint = Highpoint::where('state', 'AK')->first(); // Denali as featured

        return view('home', [
            'highpoints' => $highpoints,
            'featuredHighpoint' => $featuredHighpoint,
            'userCompletedHighpointsCount' => $userCompletedHighpointsCount,
        ]);
    }
}
