<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = projects;
        return view('projects', compact('projects'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'project_description' => 'required'
        ]);
        $project = new Project();
        $project->project_name = $request->project_name;
        $project->project_description = $request->project_description;
        $project->save();
        return redirect('/');
    }

    public function edit(Project $project)
    {
        return view('edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        if(isset($_POST['delete'])) {
            $project->delete();
            return redirect('/');
        }
        else
        {
            $this->validate($request, [
                'project_name' => 'required',
                'project_description' => 'required'
            ]);
            $project->project_name = $request->project_name;
            $project->project_description = $request->project_description;
            $project->save();
            return redirect('/');
        }
    }
}
