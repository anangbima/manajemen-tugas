<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\MemberProject;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    protected $project;

    public function __construct(){
        $this->project = new Project;
    }

    // Display listing of the resource
    public function index() {
        $data = [
            'projects'  => Project::with('member', 'task')->get(), 
        ];

        return Inertia::render('Admin/Project', [
            'projects'  => Project::with('member', 'task')->get()
        ]);
    }

    // Display specific projects
    public function show(Project $project) {
        
    }

    // Store data projects
    public function store(StoreProjectRequest $request) {
        $data = $request->validated();
        $project = $this->project->store($data);
        
        if($project && $request->member != null) {
            foreach($request->member as $value) {
                MemberProject::create([
                    'project_id'    => $project->id,
                    'user_id'       => $value,
                ]);
            }
        }

        return redirect('projects');
    }

    // Update spesific data in project
    public function update(UpdateProjectRequest $request, Project $project) {
        $data = $request->validated();
        $project->update($data);

        return redirect('projects');
    }

    // Remove spesific data in project
    public function destroy(Project $project) {
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
