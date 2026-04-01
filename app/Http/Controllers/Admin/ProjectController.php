<?php

// app/Http/Controllers/Admin/ProjectController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

public function create()
{
    return view('admin.projects.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'tech_stack' => 'required'
    ]);

    Auth::user()->projects()->create(
        $request->only([
            'title',
            'description',
            'tech_stack'
        ])
    );

    return redirect()->route('admin.projects.index')
        ->with('success', 'Project created successfully');
}

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tech_stack' => 'required'
        ]);

        $project->update($request->all());

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully');
    }
}