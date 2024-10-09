<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title'     => 'Projects',
            'projects'  => Project::with('member', 'user', 'task')->where('user_id', $this->user->id)->get() 
        ];

        return view('user.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Create Project'
        ];

        return view('user.projects.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $project = Project::create([
            'user_id'       => $this->user->id,
            'name'          => $data['name'],
            'description'   => $data['description'],
        ]);
        
        if($project && $request->member != null) {
            foreach($request->member as $value) {
                Member::create([
                    'project_id'    => $project->id,
                    'user_id'       => $value,
                ]);
            }
        }

        return redirect('projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // dd($project->member->toArray());
        $data = [
            'title'     => $project->name,
            'project'   => $project
        ];

        return view('user.projects.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data = [
            'title'     => 'Update Project',
            'project'   => $project
        ];

        return view('user.projects.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->update($data);

        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        // Jika mempunyai member, dihapus sekalian
        if($project->member != null) {
            foreach($project->member as $member) {
                $member->delete();
            }
        }

        // Jika mempunyai tugas, dihapus sekalian
        if ($project->task != null) {
            foreach($project->task as $task) {
                $task->delete();
            }
        }

        return redirect('projects');
    }
}
