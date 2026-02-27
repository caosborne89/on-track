<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'projects' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['max:1024']
        ]);

        Project::create($validated);


        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $tickets = Ticket::where('project_id', $project->id)->get();
        return view('project.show', [
            'project' => $project,
            'tickets' => $tickets
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['max:1024']
        ]);

        $project->update($validated);
        return redirect("/projects/$project->id")->with('success', "Updated project $project->name");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
