<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_projects = Project::orderBy('id', 'desc')->paginate(7);
        return view('admin.projects.index', compact('my_projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $form_data['slug'] = Project::generateSlug($form_data['name']);

        $new_project = new Project();
        $new_project->slug = $form_data['slug'];

        $new_project->fill($form_data);
        $new_project->save();

        return redirect(route('admin.projects.index'))->with('create', "<strong>$new_project->name</strong> aggiunto al database.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $request->all();

        if ($form_data['name'] != $project->name) {
            $form_data['slug'] = Project::generateSlug($form_data['name']);
        } else {
            $form_data['slug'] = $project->slug;
        }

        $project->update($form_data);

        return redirect(route('admin.projects.index'))->with('edit', "<strong>$project->name</strong> aggiornato con successo.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect(route('admin.projects.index'))->with('create', "<strong>$project->name</strong> eliminato dal database.");
    }
}