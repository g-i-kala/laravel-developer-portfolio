<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SkillCategoryRequest;

class SkillCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ('skillsow kategorie! do sekcji wyswietle tu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ('skillsow kategorie! formularz');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillCategoryRequest $request)
    {
        $attributes = $request->validated();
        SkillCategory::create($attributes);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillCategory $skillCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillCategory $skillCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkillCategory $skillCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillCategory $skillCategory)
    {
        $skillCategory->delete();
        return redirect()->back();
    }
}
