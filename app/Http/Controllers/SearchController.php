<?php

namespace App\Http\Controllers;

use App\Models\Project;

class SearchController extends Controller
{
    public function __invoke()
    {
        $projects = Project::query()
                    ->search(request('q'))
                    ->get();

        // return $jobs; //get a json
        return view('results', compact('projects'));
    }
}
