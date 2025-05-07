<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Highpoint;
use Illuminate\View\View;

final class HighpointController extends Controller
{
    /**
     * Display a listing of all highpoints.
     */
    public function index(): View
    {
        $highpoints = Highpoint::all();
        $userCompletedHighpointsCount = auth()->user()?->highpoints()->wherePivot('completed', true)->count() ?? null;

        return view('highpoint.index', [
            'highpoints' => $highpoints,
            'userCompletedHighpointsCount' => $userCompletedHighpointsCount,
        ]);
    }

    /**
     * Display the specified highpoint.
     */
    public function show(Highpoint $highpoint): View
    {
        return view('highpoint.show', [
            'highpoint' => $highpoint,
        ]);
    }
} 