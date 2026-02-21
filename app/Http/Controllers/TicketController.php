<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $users = User::all();
        return view('ticket.create', [
            'users' => $users,
            'project' => $project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $project_id = $project->id;

        $ticket = Ticket::create([
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'assignee_id' => $request->input('assignee'),
            'author_id' => Auth::id(),
            'project_id' => $project_id, 
        ]);

        $ticket->save();

        return redirect("/projects/$project_id");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project, Ticket $ticket)
    {
        return view('ticket.show', [
            'ticket' => $ticket,
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
