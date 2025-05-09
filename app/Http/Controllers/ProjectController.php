<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Project;
use App\Models\Developer;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->with(['developer', 'tags'])->get()->groupBy('featured');

        return view('projects.index', [
            'featuredProjects' => $projects[1],
            'projects' => $projects[0], //paginate later
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $attributes = $request->validated();

        $project = Auth::user()->developer->projects()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $project->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // authorize
        $this->authorize('viewAny', Project::class);

        //fetch jobs that are the current logged in user jobs
        $userId = Auth::id();
        $developer = Developer::where('user_id', $userId)->first();

        $projects = Project::latest()->with('developer')->where('developer_id', $developer->id)->simplePaginate(5);

        return view('projects.show', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'job' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Project $project, ProjectRequest $request)
    {
        $attributes = $request->validated();
        // Authorize Update
        $this->authorize('update', $project);

        $project->update(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {

            $tags = explode(',', $attributes['tags']);
            $project->retag($tags);
        }

        // redirect to /jobs/show
        return redirect('/projects/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        $project->delete();
        return redirect('/projects/show');
    }
}
