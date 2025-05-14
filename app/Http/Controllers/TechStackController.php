<?php

namespace App\Http\Controllers;

use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(TechStack $techStack)
    {
        return view('results', [
            'projects' => $techStack->projects,
            'name' => $techStack->name
        ]);
    }
}
