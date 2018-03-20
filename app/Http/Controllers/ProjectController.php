<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProjectController extends Controller
{
    /**
     * Query all project objects and return them to main project page
     *
     * @return Project
     */
    public function index()
    {
        $projects = Project::all();

        $tags = Tag::has('projects')->get();

        return view('projects.index', compact('projects', 'tags'));
    }

    public function single($slug)
    {
        $project = Project::where('slug', $slug)->first();

        return view('projects.single', compact('project'));
    }


//    public function show(Request $request)
//    {
//
//        $projects = Project::wherehas('tags', function ($query) {
//            $query->where('id', '=', 5);
//        })->get();
//        $tags = Tag::has('projects')->get();
//
//        return view('projects.index', compact('projects', 'tags'));
//    }


}
