<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Developer;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\SkillCategory;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillCategories = SkillCategory::with('skills')->get();

        return view('skills.index', compact('skillCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skillCategories = SkillCategory::with('skills')->get();

        return view('skills.create', compact('skillCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        $attributes = $request->validated();
        $skill = Skill::create(Arr::except($attributes, 'level'));
        Developer::first()->skills()->attach($skill->id, ['level' => $attributes['level']]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->back();
    }
}
