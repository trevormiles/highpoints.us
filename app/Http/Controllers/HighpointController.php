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

        return view('highpoints', [
            'highpoints' => $highpoints,
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