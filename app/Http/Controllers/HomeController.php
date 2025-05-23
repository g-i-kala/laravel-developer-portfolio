<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Project;
use App\Models\Developer;
use App\Models\TechStack;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developer = Developer::with('user')->first();
        $projects = Project::latest()->with(['developer', 'tags'])->get();
        $featuredProjects = Project::latest()->with(['developer', 'tags', 'techStacks'])->where('featured', true)->get();

        return view('index', [
            'developer' => $developer,
            'projects' => $projects, //paginate later
            'featuredProjects' => $featuredProjects,
            'tags' => Tag::all(),
            'techStacks' => TechStack::all(),
        ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
