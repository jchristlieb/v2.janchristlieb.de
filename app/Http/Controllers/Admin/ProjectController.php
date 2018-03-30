<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query all projects
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // query name and id of each tag
        $tags = Tag::all();

        // show form to create new project
        return view('admin.projects.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // validate requested data

        $validatedData = $this->validate(request(), [
            'name' => 'required',
            'title' => 'nullable',
            'description' => 'nullable',
            'date' => 'nullable',
            'client' => 'nullable',
            'link' => 'nullable|url',
            'repository' => 'nullable|url',
        ]);

//        $this->validate(request(), [
//            'images' => 'required|image',
//        ]);

        // create a new project using the request data

        $project = Project::create($validatedData);

        // retrieve the selected tags ID
        $tags = $request->input('tags');

        // link the $tags to the $project
        $project->tags()->attach($tags);

        // associate images to the project
        foreach ($request->file('images') as $image) {
            $project
                ->addMedia($image)
                ->withResponsiveImages()
                ->toMediaCollection($project->slug);
        }

        // redirect to the dashboard
        return view('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // query data for requested project
        $project = Project::findOrFail($id);

        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the request

        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'client' => 'nullable',
            'link' => 'required|url',
            'repository' => 'nullable|url',
        ]);

        // update values of project

        $project = Project::findOrFail($id);

        $project->update($validatedData);


        return view('admin.dashboard');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // query the project
        Project::destroy($id);

        return view('admin.dashboard');

    }
}
